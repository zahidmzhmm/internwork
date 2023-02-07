<?php

namespace App\Http\Controllers;

use App\Models\Application\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $application = 0;
        $appl = Application::where('user_id', '=', Auth::id())->orderBy('id', 'desc')->first();
        if ($appl) {
            $application = $appl;
        }
        return view('user.home', compact('application'));
    }
}
