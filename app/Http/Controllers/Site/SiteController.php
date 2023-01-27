<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
