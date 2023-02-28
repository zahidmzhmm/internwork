<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserController extends Controller
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $profile = Profile::find($id);
        if (!$profile) {
            return redirect()->back()->with('error', 'Data not found');
        }
        try {
            $user = User::find($profile->user_id);
            $user->delete();
            $profile->delete();
            return redirect()->back()->with('success', 'Successfully Deleted');
        }catch (\Exception $exception){
            return redirect()->back()->with('success', 'Successfully Deleted');
        }
    }

    public function status($id)
    {
        $profile = User::find($id);
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
}
