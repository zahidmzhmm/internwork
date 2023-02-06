<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\Application\Application;
use App\Models\Application\Duration;
use App\Models\Application\Employ;
use App\Models\Application\Experience;
use App\Models\Application\Study;
use App\Models\Application\Travel;
use App\Models\Application\Visa;
use App\Models\Profile;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
        $application = Application::where('user_id', '=', Auth::id())
            ->where('status', '=', 'open')
            ->where('payment_status', '=', 'due')
            ->first();
        if ($application) {
            return redirect('/user/payment/' . $application->reference);
        }
        return view('user.apply', compact('last_application_id'));
    }

    public function view($id)
    {
        return $id;
    }

    public function durations()
    {
        return Duration::all();
    }

    public function applications(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'category' => 'required',
            'destination' => 'required',
            'program' => 'required',
            'duration' => 'required',
            'reference' => 'required',
            'fees' => 'required',
            'us_visa' => 'required',
            'travel_exp' => 'required',
            'applicable_id' => 'required',
            'applicable_name' => 'required',
            'applicable_start' => 'required',
            'applicable_end' => 'required',
            'applicable_deadline' => 'required',
            'payment_method' => 'required'
        ]);
        $apnt = new Application();
        $apnt->user_id = $request->user_id;
        $apnt->category = $request->category;
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
        $profile = Profile::where('user_id', '=', $request->user_id)->first();
        try {
            $apnt->save();
            $pdf = $this->applicationPdfMaker($apnt);
            Mail::send('mail.admin.application', ['profile' => $profile, 'application' => $apnt], function ($message) use ($pdf, $apnt) {
                $message->to(env('APP_EMAIL'));
                $message->subject('NEW INTERNSHIP APPLICATION');
                $message->attachData($pdf->output(), $apnt->reference . '.pdf');
            });
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

    public function visas(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'category' => 'required',
            'year' => 'required',
            'decision' => 'required',
            'place' => 'required',
        ]);
        $sp = new Visa();
        $sp->user_id = $request->user_id;
        $sp->category = $request->category;
        $sp->year = $request->year;
        $sp->decision = $request->decision;
        $sp->place = $request->place;
        try {
            $sp->save();
            return self::json_res("Success", 200, $sp);
        } catch (\Exception $exception) {
            return self::json_res($exception->getMessage());
        }
    }

    public function travels(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'country' => 'required',
            'purpose' => 'required',
            'duration' => 'required',
            'year' => 'required',
        ]);
        $sp = new Travel();
        $sp->user_id = $request->user_id;
        $sp->country = $request->country;
        $sp->purpose = $request->purpose;
        $sp->duration = $request->duration;
        $sp->year = $request->year;
        try {
            $sp->save();
            return self::json_res("Success", 200, $sp);
        } catch (\Exception $exception) {
            return self::json_res($exception->getMessage());
        }
    }

    public function destroy($id)
    {
        $application = Application::find($id);
        if (!$application) {
            return redirect()->back()->with('error', 'Data not found');
        }
        $profile = Profile::where('user_id', '=', $application->user_id)->orderBy('id', 'desc')->first();
        try {
            $profile->status = 1;
            $profile->save();
            $application->delete();
            return redirect()->back()->with('success', 'Successfully Deleted');
        } catch (\Exception $exception) {
            return redirect()->back()->with('success', 'Successfully Deleted');
        }
    }

    public function status($status, $id)
    {
        $application = Application::find($id);
        if (!$application) {
            return redirect()->back()->with('error', 'Data not found');
        }
        $application->approve_status = $status;
        $application->save();
        return redirect()->back()->with('success', 'Successfully Updated');
    }

    public function applicationDownload($id)
    {
        $application = Application::find($id);
        if (!$application) {
            return redirect()->back()->with('error', 'Data not found');
        }
        return $this->applicationPdfMaker($application)->download("Application - " . $application->reference . '.pdf');
    }

    public function applicationPdfMaker($application)
    {
        $user = User::find($application->user_id);
        $profile = Profile::where('user_id', '=', $application->user_id)
            ->orderBy('id', 'desc')
            ->first();
        $employ = Employ::where('user_id', '=', $application->user_id)
            ->orderBy('id', 'desc')
            ->first();
        $experiences = Experience::where('user_id', '=', $application->user_id)
            ->orderBy('id', 'desc')
            ->first();
        $studies = Study::where('user_id', '=', $application->user_id)
            ->orderBy('id', 'desc')
            ->first();
        return Pdf::loadView('pdf.application', compact('user', 'profile', 'application', 'employ', 'experiences', 'studies'));
    }
}
