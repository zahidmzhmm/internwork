<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Application\Application;
use App\Models\Appointment\Appointment;
use App\Models\Appointment\AppointmentList;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function storeList(Request $request)
    {
        $request->validate(['time' => 'required', 'type' => 'required']);
        $appointment = new AppointmentList();
        $appointment->time = Carbon::parse($request->time);
        $appointment->type = $request->type;
        try {
            $appointment->save();
            return redirect()->back()->with('success', 'Success');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function updateList(Request $request, $id)
    {
        $appointmentList = AppointmentList::find($id);
        if (!$appointmentList) {
            return redirect()->back()->with('error', 'Data not found!');
        }
        $appointmentList->time = Carbon::parse($request->time);
        $appointmentList->type = $request->type;
        try {
            $appointmentList->save();
            return redirect()->back()->with('success', "Success");
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function destroyList($id)
    {
        $appointmentList = AppointmentList::find($id);
        if (!$appointmentList) {
            return redirect()->back()->with('error', 'Data not found!');
        }
        try {
            $appointmentList->delete();
            return redirect()->back()->with('error', "Success");
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function appointment($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->back()->with('error', "Application not found");
        }
        $appointment = 0;
        $apnt = Appointment::where("user_id", '=', $user->id)->first();
        if ($apnt) {
            $appointment = $apnt;
        }
        return view('admin.appointment', compact('user', 'appointment'));
    }

    public function appointmentReq(Request $request, $id)
    {
        $request->validate(['status' => 'required', 'approval' => 'required', 'type' => 'required']);
        $user = User::find($id);
        if (!$user) {
            return redirect()->back()->with('error', "Application not found");
        }
        $appointment = Appointment::where("user_id", '=', $user->id)->first();
        if (!$appointment) {
            $appointment = new Appointment();
        }
        $appointment->user_id = $id;
        $appointment->status = $request->status;
        $appointment->approval = $request->approval;
        $appointment->type = $request->type;
        $appointment->time = $request->time;
        try {
            $appointment->save();
            return redirect()->back()->with('success', "Success");
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function requestAppointment(Request $request)
    {
        $request->validate(['type' => 'required', 'time' => 'required']);
        $appointment = Appointment::where('user_id', '=', Auth::id())->first();
        if (!$appointment) {
            return redirect()->back()->with('error', 'Appointment not found');
        }
        $appointment->time = $request->time;
        $appointment->save();
        return redirect()->back()->with('success', 'Success');
    }

    public function appointmentList(Request $request)
    {
        $request->validate(['type' => 'required']);
        $all = AppointmentList::where('type', '=', $request->type)->get();
        $listOptions = '<option value="">Select Appointment Date</option>';
        foreach ($all as $appointment_list) {
            $dt = date('Y-m-d H:i', strtotime($appointment_list->time));
            $listOptions .= '<option value="' . $dt . '">' . $dt . '</option>';
        }
        return json_encode(['status' => 'success', 'listOptions' => $listOptions]);
    }
}
