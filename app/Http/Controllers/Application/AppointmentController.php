<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\Application\Application;
use App\Models\Application\Duration;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function apply()
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }
        $profile = Profile::where('user_id', '=', Auth::id())->first();
        if (!$profile) {
            return redirect()->route('account');
        }
        if ($profile->status != 2) {
            return redirect()->route('account');
        }
        $last_application_id = 1;
        $last_application = Application::orderBy('id', 'desc')->first();
        if ($last_application) {
            $last_application_id = $last_application->id;
        }
        return view('user.apply', compact('last_application_id'));
    }

    public function durations()
    {
        return Duration::all();
    }

    public function application(Request $request)
    {
        //
    }
}
