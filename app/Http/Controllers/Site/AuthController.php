<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Mail\PlainMailable;
use App\Models\Profile;
use App\Models\Uploads;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            'fname' => 'required',
            'lname' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postcode' => 'required',
            'study_level' => 'required',
            'course' => 'required',
            'matriculation' => 'required',
            'institute' => 'required',
            'internship' => 'required',
            'program' => 'required',
            'pss_year' => 'required',
            'username' => 'required|string|min:4|max:10|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:7'
        ]);
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->token = strtoupper(substr(uniqid(), 0, 6));
        $user->password = Hash::make($request->password);
        try {
            $user->save();
            $profile = new Profile();
            $profile->user_id = $user->id;
            $profile->fname = $request->fname;
            $profile->lname = $request->lname;
            $profile->mobile = $request->mobile;
            $profile->address = $request->address;
            $profile->city = $request->city;
            $profile->state = $request->state;
            $profile->postcode = $request->postcode;
            $profile->study_level = $request->study_level;
            $profile->course = $request->course;
            $profile->matriculation = $request->matriculation;
            $profile->institute = $request->institute;
            $profile->internship = $request->internship;
            $profile->program = $request->program;
            $profile->pss_year = $request->pss_year;
            $profile->save();
            Uploads::insert([
                [
                    'user_id' => $user->id,
                    'title' => "International Passport",
                ],
                [
                    'user_id' => $user->id,
                    'title' => "Previous Visa",
                ],
                [
                    'user_id' => $user->id,
                    'title' => "Admission/Graduation Letter",
                ],
                [
                    'user_id' => $user->id,
                    'title' => "Academic Records/Transcripts",
                ],
                [
                    'user_id' => $user->id,
                    'title' => "Academic Recommendation Letter",
                ],
                [
                    'user_id' => $user->id,
                    'title' => "Professional Recommendation Letter",
                ],
                [
                    'user_id' => $user->id,
                    'title' => "Resume",
                ],
            ]);
            Mail::send(new PlainMailable("Verify Email", $user->email, 'verification', $user));
            return redirect()->route('verification.sent')->with('success', 'Success');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function loginReq(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:7'
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if (!$user) {
            return redirect()->back()->with('error', 'Email or Password wrong');
        }
        if (Hash::check($request->password, $user->password)) {
            if ($user->role == 2) {
                if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                    return redirect()->route('admin');
                } else {
                    return redirect()->back()->with('error', 'Email or Password wrong');
                }
            }
            if ($user->status !== 1) {
                return redirect()->route('login')->with('error', 'Account Deactivated');
            }
            if ($user->email_verified_at === null) {
                $user->token = strtoupper(substr(uniqid(), 0, 6));
                $user->save();
                Mail::send(new PlainMailable("Verify Email", $user->email, 'verification', $user));
                return redirect()->route('verification.sent')->with('success', 'Email verification code sent');
            }
            if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('login')->with('error', 'Email or Password wrong');
            }
            if (Auth::user()->role == 1) {
                $profile = Profile::where('user_id', '=', Auth::id())->first();
                if ($profile->picture === null) {
                    return redirect()->route('profile.u.edit');
                }
                return redirect()->route('account');
            }
        }
        return redirect()->back()->with('error', 'Email or Password wrong');
    }

    public function passwordEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $user = User::where('email', '=', $request->email)->first();
        if (!$user) {
            return redirect()->back()->with('error', 'User not found!');
        }
        $user->code = strtoupper(substr(uniqid(), 0, 6));
        $user->save();
        Mail::send(new PlainMailable("Forget Password", $user->email, 'request-reset', $user));
        return redirect()->route('password.change')->with('success', 'Security code has been sent');
    }

    public function passwordUpdate(Request $request)
    {
        $request->validate(['s_code' => 'required', 'password' => 'required|confirmed|min:7']);
        $user = User::where('code', '=', $request->s_code)->first();
        if (!$user) {
            return redirect()->route('password.change')->with('error', 'Data not found');
        }
        $user->password = Hash::make($request->password);
        $user->code = NULL;
        $user->save();
        return redirect()->route('login')->with('success', 'Password Change Success');
    }


    public function passwordConfirm(Request $request)
    {
        dd($request->toArray());
    }

    public function verification(Request $request)
    {
        $request->validate(['code' => 'required|string']);
        $user = User::where('token', '=', $request->code)->first();
        if (!$user) {
            return redirect()->route('verification.sent')->with('error', 'Token error');
        }
        $user->email_verified_at = Carbon::now();
        $user->token = NULL;
        $user->save();
        \auth()->login($user);
        return redirect()->route('profile.u.edit')->with('success', 'Verification Success');
    }

    public function logout()
    {
        if (Auth::user()) {
            Auth::logout();
            return redirect()->route('login')->with('error', 'Successfully Logged out');
        }
        return redirect()->route('login');
    }
}
