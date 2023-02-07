<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application\Application;
use App\Models\Application\Duration;
use App\Models\Coupon;
use App\Models\Profile;
use App\Models\Uploads;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
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
            'deadline' => 'required',
        ]);
        $duration = new Duration();
        $duration->applicable_entry = $request->applicable_entry;
        $duration->start_date = Carbon::parse('01-' . $request->start_date);
        $duration->deadline = Carbon::parse($request->deadline);
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
            'deadline' => 'required',
        ]);
        $duration = Duration::find($id);
        if (!$duration) {
            return redirect()->back()->with('error', "Data not found");
        }
        $duration->applicable_entry = $request->applicable_entry;
        $duration->start_date = Carbon::parse('01-' . $request->start_date);
        $duration->deadline = Carbon::parse($request->deadline);
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

    public function coupon()
    {
        $coupons = Coupon::get();
        return view('admin.coupon', compact('coupons'));
    }

    public function couponReq(Request $request)
    {
        $request->validate(['code' => 'required|unique:coupons']);
        $coupon = new Coupon();
        $coupon->code = $request->code;
        try {
            $coupon->save();
            return redirect()->back()->with('success', 'Success');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error_message', $exception->getMessage());
        }
    }

    public function couponUpdate(Request $request, $id)
    {
        $request->validate(['code' => 'required|unique:coupons']);
        $coupon = Coupon::find($id);
        if (!$coupon) {
            return redirect()->back()->with('error_message', "Data not found!");
        }
        $coupon->code = $request->code;
        try {
            $coupon->save();
            return redirect()->back()->with('success', 'Success');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error_message', $exception->getMessage());
        }
    }

    public function deleteCoupon($id)
    {
        $coupon = Coupon::find($id);
        $coupon->delete();
        return redirect()->back()->with('success', "Success");
    }

    public function upload($id)
    {
        $application = Application::find($id);
        if (!$application) {
            return redirect()->back()->with('error', 'Data not found');
        }
        $uploads = Uploads::where('user_id', '=', $application->user_id)->where('type', '=', 1)->get();
        return view('admin.upload', compact('application', 'uploads'));
    }

    public function download($id)
    {
        $application = Application::find($id);
        if (!$application) {
            return redirect()->back()->with('error', 'Data not found');
        }
        $downloads = Uploads::where('user_id', '=', $application->user_id)->where('type', '=', 2)->get();
        return view('admin.download', compact('application', 'downloads'));
    }

    public function uploadReq(Request $request, $type)
    {
        $request->validate(['title' => 'required', 'user_id' => 'required']);
        $upload = new Uploads();
        $upload->user_id = $request->user_id;
        $upload->title = $request->title;
        $upload->type = $type;
        if ($request->user()->role == 2 && $type == 2 && empty($request->file('file'))) {
            return redirect()->back()->with('error', 'File required');
        }
        if ($request->hasFile('file')) {
            $upload->path = self::fileUpload($request->file('file'), 'user/uploads');
            $upload->uploaded = 2;
        }
        try {
            $upload->save();
            return redirect()->back()->with('success', "Success");
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function udDelete($id)
    {
        $upload = Uploads::find($id);
        if ($upload->path !== null && File::exists(public_path($upload->path))) {
            File::delete(public_path($upload->path));
        }
        if ($upload->delete()) {
        }
        return redirect()->back()->with('success', "Success");
    }
}
