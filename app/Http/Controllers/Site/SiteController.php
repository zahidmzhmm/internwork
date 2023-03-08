<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Mail\PlainMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    public function index()
    {
        return view('root.index');
    }

    public function about()
    {
        return view('root.about');
    }

    public function contact()
    {
        return view('root.contact');
    }

    public function h1b()
    {
        return view('root.h1b');
    }

    public function internships()
    {
        return view('root.internships');
    }

    public function privacy()
    {
        return view('root.privacy');
    }

    public function traineeships()
    {
        return view('root.traineeships');
    }

    public function contactReq(Request $request)
    {
        $request->validate(['h-captcha-response' => 'required']);
        try {
            Mail::send(new PlainMailable($request->subject, env('APP_EMAIL'), 'contact', $request->toArray()));
            return redirect()->back()->with('success', 'Message send success');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }
}
