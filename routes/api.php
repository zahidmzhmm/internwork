<?php

use App\Http\Controllers\Application\ApplicationController;
use App\Http\Controllers\User\AppointmentController;
use App\Http\Controllers\User\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('crop-image-upload-ajax', [ProfileController::class, 'cropImageUploadAjax']);
Route::get('durations', [ApplicationController::class, 'durations'])->name('durations');
Route::post('applications', [ApplicationController::class, 'applications'])->name('applications');
Route::post('experiences', [ApplicationController::class, 'experiences'])->name('experiences');
Route::post('studies', [ApplicationController::class, 'studies'])->name('studies');
Route::post('employs', [ApplicationController::class, 'employs'])->name('employs');
Route::post('visas', [ApplicationController::class, 'visas'])->name('visas');
Route::post('travels', [ApplicationController::class, 'travels'])->name('travels');
Route::get('appointment-list', [AppointmentController::class, 'appointmentList'])->name('appointment.list');
