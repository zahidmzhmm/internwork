<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\Application\Application;
use App\Models\Profile;
use App\Models\Uploads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class UploadController extends Controller
{

    public function upload(Request $request)
    {
        $application = 0;
        $appl = Application::where('user_id', '=', Auth::id())->orderBy('id', 'desc')->first();
        if ($appl) {
            $application = $appl;
        }
        $uploads = Uploads::where('user_id', '=', Auth::id())->where('type', '=', 1)->get();
        return view('user.upload', compact('application', 'uploads'));
    }

    public function download(Request $request)
    {
        $application = 0;
        $appl = Application::where('user_id', '=', Auth::id())->orderBy('id', 'desc')->first();
        if ($appl) {
            $application = $appl;
        }
        $downloads = Uploads::where('user_id', '=', Auth::id())->where('type', '=', 2)->get();
        return view('user.download', compact('application', 'downloads'));
    }

    public function uploadReq(Request $request, $id)
    {
        $request->validate(['file' => 'required|file']);
        $upload = Uploads::find($id);
        if (!$upload) {
            return redirect()->back()->with('error', "Data not found!");
        }
        if ($upload->path !== null && File::exists(public_path($upload->path))) {
            File::delete(public_path($upload->path));
        }
        $upload->path = self::fileUpload($request->file('file'), 'user/uploads');
        $upload->uploaded = 2;
        try {
            $upload->save();
            if (isset($request->from_user) && !empty($request->from_user)) {
                $profile = Profile::where('user_id', '=', $request->from_user)->first();
                $uploads = Uploads::where('user_id', '=', $request->from_user)->where('type', '=', 1)->get();
                $uploaded = Uploads::where('user_id', '=', $request->from_user)->where('type', '=', 1)->where('uploaded', '=', 2)->count();
                Mail::send('mail.admin.uploads', ['profile' => $profile, 'uploads' => $uploads, 'uploaded' => $uploaded], function ($message) use ($profile, $uploads, $uploaded) {
                    $message->to(env('APP_EMAIL'));
                    $message->subject($profile->fname . ' ' . $profile->lname . ' has uploaded ' . $uploaded . ' files');
                });
            }
            return redirect()->back()->with('success', "Success");
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

}
