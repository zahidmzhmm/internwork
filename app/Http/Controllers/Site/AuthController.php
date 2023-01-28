<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Mail\PlainMailable;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

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

    public function passwordReq()
    {
        return view('auth.passwords.confirm');
    }

    public function registerReq(Request $request)
    {
        $request->validate([
            'username' => 'required|string|min:4|max:10|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:7'
        ]);
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->token = substr(uniqid(), 0, 6);
        $user->password = Hash::make($request->password);
        try {
            $user->save();
            Mail::send(new PlainMailable("Verify Email", $user->email, 'verification', $user));
            return redirect()->route('verification.sent')->with('success', 'Success');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
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

    public function verification(Request $request)
    {
        $request->validate(['code' => 'required|string']);
        dd($request->toArray());
    }
}
