<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application\Application;
use App\Models\Application\Duration;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function registrations()
    {
        $profiles = Profile::join('users', 'profiles.user_id', '=', 'users.id')
            ->select(
                'profiles.id as p_id',
                'profiles.created_at as reg',
                'profiles.status as p_status',
                'users.status as u_status',
                'users.*',
                'profiles.*',
            )
            ->paginate(20);
        return view('admin.registrations', compact('profiles'));
    }

    public function applications(Request $request)
    {
        $applications = DB::table('applications')
            ->join('users', 'applications.user_id', '=', 'users.id')
            ->join("profiles", 'users.id', '=', 'profiles.user_id');
        if (isset($request->cat) && !empty($request->cat)) {
            $applications->where('applications.category', '=', $request->cat);
        }
        if (isset($request->status) && !empty($request->status)) {
            $applications->where('applications.approve_status', '=', $request->status);
        }
        $applications->select('users.email', 'profiles.*', 'applications.*');
        $applications = $applications->paginate(20);
        return view('admin.applications', compact('applications'));
    }

    public function appointmentList()
    {
        return view('admin.appointment-list');
    }

    public function duration()
    {
        $duration = Duration::orderBy('id', 'desc')->get();
        return view('admin.duration', compact('duration'));
    }

    public function changePassword()
    {
        return view('admin.change-password');
    }

    public function changePasswordReq(Request $request)
    {
        $request->validate(['new_password' => 'required|min:7']);
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        return redirect()->back()->with('success', 'Password change success');
    }

    public function durationReq(Request $request)
    {
        $request->validate([
            'applicable_entry' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'deadline' => 'required',
        ]);
        $duration = new Duration();
        $duration->applicable_entry = $request->applicable_entry;
        $duration->start_date = $request->start_date;
        $duration->end_date = $request->end_date;
        $duration->deadline = $request->deadline;
        try {
            $duration->save();
            return redirect()->back()->with('success', 'Success');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function durationUpdate(Request $request, $id)
    {
        $request->validate([
            'applicable_entry' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'deadline' => 'required',
        ]);
        $duration = Duration::find($id);
        if (!$duration) {
            return redirect()->back()->with('error', "Data not found");
        }
        $duration->applicable_entry = $request->applicable_entry;
        $duration->start_date = $request->start_date;
        $duration->end_date = $request->end_date;
        $duration->deadline = $request->deadline;
        try {
            $duration->save();
            return redirect()->back()->with('success', 'Success');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function durationDelete($id)
    {
        $duration = Duration::find($id);
        if (!$duration) {
            return redirect()->back()->with('error', "Data not found");
        }
        if ($duration->delete()) {
            return redirect()->back()->with('success', 'Success');
        }
        return redirect()->back()->with('success', 'Success');
    }
}
