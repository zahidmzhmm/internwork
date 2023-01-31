<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaypalController extends Controller
{
    public function payment($ref, Request $request)
    {
        dd($request->toArray(), $ref);
    }
}
