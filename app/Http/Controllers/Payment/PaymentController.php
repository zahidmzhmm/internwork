<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\Application\Application;
use App\Models\Coupon;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Paystack;

class PaymentController extends Controller
{
    public function payment($ref, Request $request)
    {
        $application = Application::orderBy("id", 'desc')
            ->where('user_id', '=', $request->user()->id)
            ->where('reference', '=', $ref)
            ->first();
        if (!$application) {
            return redirect()->route('account')->with('error', 'Something went wrong');
        }
        if ($application->payment_status != 'due') {
            return redirect()->route('account')->with('error', 'Already paid');
        }
        return view('user.payment', compact('application'));
    }

    public function pay(Request $request)
    {
        $request->validate(['payment_method' => 'required', 'application' => 'required']);
        $applicationId = $request->application;
        $application = Application::where('reference', '=', $applicationId)
            ->first();
        if (!$application) {
            return \redirect()->back()->with('error', 'Data not found!');
        }
        if ($request->payment_method == 'waiver') {
            if (empty($request->code)) {
                return \redirect()->back()->with('error', 'Code field is required');
            }
            $coupon = Coupon::where('code', '=', $request->code)->first();
            if (!$coupon) {
                return \redirect()->back()->with('error', 'Code not found');
            }
            return $this->mark_paid($application, "waiver");
        }
        if ($request->payment_method == 'paypal') {
            if ($request->status == 'paid') {
                return $this->mark_paid($application, "paypal");
            }
        }
        if ($request->payment_method == 'paystack') {
            return $this->paystack($application, $request->user());
        }
    }

    public function paystack($application, $user)
    {
        $ref = uniqid('ps_');
        $application->req_ref = $ref;
        $application->save();
        $data = array(
            "amount" => $application->fees * 640 * 100,
            "reference" => $ref,
            "email" => $user->email,
            "currency" => env('PAYSTACK_CURRENCY'),
            "orderID" => $application->id,
        );
        try {
            return Paystack::getAuthorizationUrl($data)->redirectNow();
        } catch (\Exception $e) {
            return Redirect::back()->with(['error' => $e->getMessage()]);
        }
    }

    public function paystackCallback(Request $request)
    {
        $request->validate(['reference' => 'required']);
        $application = Application::where('req_ref', '=', $request->reference)->first();
        if (!$application) {
            return \redirect()->route('account')->with('error', 'Something went wrong');
        }
        return $this->mark_paid($application, "paystack");
    }

    public function mark_paid($application, $method)
    {
        $application->payment_method = $method;
        $application->payment_status = "paid";
        $application->req_ref = NULL;
        try {
            $profile = Profile::where('user_id', '=', Auth::id())->first();
            $profile->status = 3;
            $profile->save();
            $application->save();
            return \redirect()->route('account')->with('success', 'Thank you for your paid');
        } catch (\Exception $exception) {
            return \redirect()->route('account')->with('error', $exception->getMessage());
        }
    }
}
