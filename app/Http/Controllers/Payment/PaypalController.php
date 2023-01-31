<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\Application\Application;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Paystack;

class PaypalController extends Controller
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

    public function paystack(Request $request)
    {
        $request->validate([
            'application' => 'required',
        ]);
        $application = Application::where('reference', '=', $request->application)
            ->first();
        if (!$application) {
            return \redirect()->back()->with('error', 'Data not found!');
        }
        $ref = uniqid('ps_');
        $application->req_ref = $ref;
        $application->save();
        $data = array(
            "amount" => $application->fees * 100,
            "reference" => $ref,
            "email" => $request->user()->email,
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
        $application->payment_method = "Paystack";
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
