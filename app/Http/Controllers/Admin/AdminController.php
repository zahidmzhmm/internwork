<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function applications()
    {
        return view('admin.applications');
    }

    public function appointmentList()
    {
        return view('admin.appointment-list');
    }

    public function duration()
    {
        return view('admin.duration');
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
}
