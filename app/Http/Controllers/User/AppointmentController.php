<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Appointment\AppointmentList;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
}
