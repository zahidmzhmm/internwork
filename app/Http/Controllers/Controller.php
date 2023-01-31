<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function json_res($message, $status = 400, $data = [], $statusAction = false)
    {
        $res = ['message' => $message, 'status' => $status, 'data' => $data];
        if ($statusAction !== false) {
            return response()->json($res, $status);
        } else {
            return response()->json($res);
        }
    }

    public static function fileUpload($file, $path = "")
    {
        if (isset($file)) {
            $path = "/";
            if ($path !== "") {
                $path .= $path . "/";
            }
            $fileName = time() . mt_rand(100, 9999) . '.' . $file->extension();
            $pathD = '/uploads' . $path . $fileName;
            $file->move(public_path('uploads' . $path), $fileName);
            return $pathD;
        } else {
            return NULL;
        }
    }
}
