<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\Application\Application;
use App\Models\Application\Duration;
use App\Models\Application\Employ;
use App\Models\Application\Experience;
use App\Models\Application\Study;
use App\Models\Profile;
use Carbon\Carbon;
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

    public function applications(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'destination' => 'required',
            'program' => 'required',
            'duration' => 'required',
            'reference' => 'required',
            'fees' => 'required',
            'us_visa' => 'required',
            'travel_exp' => 'required',
            'picture' => 'required',
            'applicable_id' => 'required',
            'applicable_name' => 'required',
            'applicable_start' => 'required',
            'applicable_end' => 'required',
            'applicable_deadline' => 'required',
            'payment_method' => 'required'
        ]);
        $apnt = new Application();
        $apnt->user_id = $request->user_id;
        $apnt->destination = $request->destination;
        $apnt->program = $request->program;
        $apnt->duration = $request->duration;
        $apnt->reference = $request->reference;
        $apnt->fees = $request->fees;
        $apnt->us_visa = $request->us_visa;
        $apnt->travel_exp = $request->travel_exp;
        $apnt->picture = self::fileUpload($request->file('picture'), 'applications');
        $apnt->applicable_id = $request->applicable_id;
        $apnt->applicable_name = $request->applicable_name;
        $apnt->applicable_start = $request->applicable_start;
        $apnt->applicable_end = $request->applicable_end;
        $apnt->applicable_deadline = $request->applicable_deadline;
        $apnt->payment_method = $request->payment_method;
        $profile = Profile::where('user_id', '=', $request->user_id);
        try {
            $apnt->save();
            return self::json_res("Success", 200, $apnt);
        } catch (\Exception $exception) {
            return self::json_res($exception->getMessage());
        }
    }

    public function experiences(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'name' => 'required',
            'location' => 'required',
            'position' => 'required',
            'start' => 'required',
            'end' => 'required',
            'description' => 'required'
        ]);
        $ex = new Experience();
        $ex->user_id = $request->user_id;
        $ex->name = $request->name;
        $ex->location = $request->location;
        $ex->position = $request->position;
        $ex->start = Carbon::parse($request->start);
        $ex->end = Carbon::parse($request->end);
        $ex->description = $request->description;
        try {
            $ex->save();
            return self::json_res("Success", 200, $ex);
        } catch (\Exception $exception) {
            return self::json_res($exception->getMessage());
        }
    }

    public function studies(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'institute' => 'required',
            'location' => 'required',
            'level' => 'required',
            'start' => 'required',
            'end' => 'required',
            'description' => 'required',
        ]);
        $sd = new Study();
        $sd->user_id = $request->user_id;
        $sd->institute = $request->institute;
        $sd->location = $request->location;
        $sd->level = $request->level;
        $sd->start = Carbon::parse($request->start);
        $sd->end = Carbon::parse($request->end);
        $sd->description = $request->description;
        try {
            $sd->save();
            return self::json_res("Success", 200, $sd);
        } catch (\Exception $exception) {
            return self::json_res($exception->getMessage());
        }
    }

    public function employs(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'name' => 'required',
            'location' => 'required',
            'position' => 'required',
            'start' => 'required',
            'end' => 'required'
        ]);
        $sp = new Employ();
        $sp->user_id = $request->user_id;
        $sp->name = $request->name;
        $sp->location = $request->location;
        $sp->position = $request->position;
        $sp->start = Carbon::parse($request->start);
        $sp->end = Carbon::parse($request->end);
        try {
            $sp->save();
            return self::json_res("Success", 200, $sp);
        } catch (\Exception $exception) {
            return self::json_res($exception->getMessage());
        }
    }
}
