<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function reset()
    {
        return view('auth.passwords.email');
    }

    public function verify()
    {
        return view('auth.verify');
    }

    public function passwordChange()
    {
        return view('auth.passwords.reset');
    }

    public function passwordReq(Request $request)
    {
        return view('auth.passwords.confirm');
    }

    public function registerReq(Request $request)
    {
        dd($request->toArray());
    }

    public function loginReq(Request $request)
    {
        dd($request->toArray());
    }

    public function passwordEmail(Request $request)
    {
        dd($request->toArray());
    }

    public function passwordUpdate(Request $request)
    {
        dd($request->toArray());
    }


    public function passwordConfirm(Request $request)
    {
        dd($request->toArray());
    }

    public function reVerify(Request $request)
    {
        dd($request->toArray());
    }
}
