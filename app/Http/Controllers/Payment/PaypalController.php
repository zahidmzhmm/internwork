<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\Application\Application;
use Illuminate\Http\Request;

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
        return view('user.payment', compact('application'));
    }
}
