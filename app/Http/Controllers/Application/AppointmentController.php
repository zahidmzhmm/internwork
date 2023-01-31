<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\Application\Application;
use App\Models\Application\Duration;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function appointment()
    {
        $last_application_id = 1;
        $last_application = Application::orderBy('id', 'desc')->first();
        if ($last_application) {
            $last_application_id = $last_application->id;
        }
        return view('user.appointment', compact('last_application_id'));
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
