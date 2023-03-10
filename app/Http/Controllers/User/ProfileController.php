<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Appointment\Appointment;
use App\Models\Appointment\AppointmentList;
use App\Models\Parental;
use App\Models\Profile;
use App\Models\Sponsor;
use App\Models\Uploads;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postcode' => 'required',
            'study_level' => 'required',
            'course' => 'required',
            'matriculation' => 'required',
            'institute' => 'required',
            'internship' => 'required',
            'program' => 'required',
            'pss_year' => 'required',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function profileEdit(Request $request)
    {
        $user = User::find($request->user()->id);
        $profile = Profile::where('user_id', '=', $request->user()->id)->first();
        return view('user.profile', compact('user', 'profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($request->toArray());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function profileUpdate(Request $request)
    {
        $profile = Profile::where('user_id', '=', $request->user()->id)->first();
        if (isset($request->profile_img) && !empty($request->profile_img)) {
            $profile->picture = $request->profile_img;
        }
        $profile->fname = $request->fname;
        $profile->lname = $request->lname;
        $profile->mobile = $request->mobile;
        $profile->institute = $request->institute;
        $profile->address = $request->address;
        try {
            $profile->save();
            return redirect()->route('account')->with('success', 'Profile Update Success');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function cropImageUploadAjax(Request $request)
    {
        $folderPath = public_path('uploads/profile/');
        if (!File::isDirectory($folderPath)) {
            File::makeDirectory($folderPath, 0777, true, true);
        }
        try {
            $image_parts = explode(";base64,", $request->image);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $imageName = uniqid() . '.png';
            $imageFullPath = $folderPath . $imageName;
            file_put_contents($imageFullPath, $image_base64);
            $upPath = '/uploads/profile/' . $imageName;
            return response()->json(['success' => true, 'message' => 'Crop Image Uploaded Successfully', 'path' => $upPath]);
        } catch (\Exception $exception) {
            return response()->json(['success' => false, 'message' => 'Crop Image Uploaded Successfully']);
        }
    }

    public function status($id)
    {
        $profile = Profile::find($id);
        if (!$profile) {
            return redirect()->back()->with('error', 'Data not found');
        }
        if ($profile->status == 1) {
            $profile->status = 2;
        } else {
            $profile->status = 1;
        }
        $profile->save();
        return redirect()->back()->with('success', 'Successfully Updated');
    }

    public function profileDownload($id)
    {
        $profile = Profile::find($id);
        if (!$profile) {
            return redirect()->back()->with('error', 'Data not found');
        }
        $user = User::find($profile->user_id);
        $father = Parental::where('user_id', '=', $profile->user_id)
            ->where('type', '=', 'father')
            ->first();
        $mother = Parental::where('user_id', '=', $profile->user_id)
            ->where('type', '=', 'mother')
            ->first();
        $sponsor = Sponsor::where('user_id', '=', $profile->user_id)
            ->first();
        $pdf = Pdf::loadView('pdf.profile', compact('user', 'profile', 'father', 'mother', 'sponsor'));
        return $pdf->download("Profile - " . $profile->fname . ' ' . $profile->lname . '.pdf');
    }

    public function appointment(Request $request)
    {
        $appointment = 0;
        $appl = Appointment::where('user_id', '=', Auth::id())->first();
        if ($appl) {
            $appointment = $appl;
        }
        $application = 0;
        $appl = \App\Models\Application\Application::where('user_id', '=', Auth::id())->orderBy('id', 'desc')->first();
        if ($appl) {
            $application = $appl;
        }
        $appointmentList = AppointmentList::all();
        return view('user.appointment', compact('appointment', 'appointmentList', 'application'));
    }
}
