<?php


use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AdminController::class, 'index'])->name('admin');
Route::get('registrations', [AdminController::class, 'registrations'])->name('admin.registrations');
Route::get('applications', [AdminController::class, 'applications'])->name('admin.applications');
Route::get('appointment-list', [AdminController::class, 'appointmentList'])->name('admin.appointment.list');
Route::get('duration', [AdminController::class, 'duration'])->name('admin.duration');
Route::get('change-password', [AdminController::class, 'changePassword'])->name('admin.change.password');
Route::get('profile-status/{id}', [ProfileController::class, 'status'])->name('admin.profile.status');
Route::get('user-status/{id}', [UserController::class, 'status'])->name('admin.user.status');
Route::get('profile-delete/{id}', [UserController::class, 'destroy'])->name('admin.user.destroy');
Route::post('change-password', [AdminController::class, 'changePasswordReq'])->name('admin.change.password.req');
Route::post('duration', [AdminController::class, 'durationReq'])->name('duration.req');
Route::post('update-duration/{id}', [AdminController::class, 'durationUpdate'])->name('duration.update');
Route::get('delete-duration/{id}', [AdminController::class, 'durationDelete'])->name('duration.delete');
