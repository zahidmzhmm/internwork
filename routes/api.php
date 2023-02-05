<?php

use App\Http\Controllers\Application\AppointmentController;
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
Route::get('durations', [AppointmentController::class, 'durations'])->name('durations');
Route::post('applications', [AppointmentController::class, 'applications'])->name('applications');
Route::post('experiences', [AppointmentController::class, 'experiences'])->name('experiences');
Route::post('studies', [AppointmentController::class, 'studies'])->name('studies');
Route::post('employs', [AppointmentController::class, 'employs'])->name('employs');
Route::post('visas', [AppointmentController::class, 'visas'])->name('visas');
Route::post('travels', [AppointmentController::class, 'travels'])->name('travels');
