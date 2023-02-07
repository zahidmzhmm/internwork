<?php


use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Application\ApplicationController;
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
Route::get('coupon', [AdminController::class, 'coupon'])->name('admin.coupon');
Route::get('change-password', [AdminController::class, 'changePassword'])->name('admin.change.password');
Route::get('profile-status/{id}', [ProfileController::class, 'status'])->name('admin.profile.status');
Route::get('user-status/{id}', [UserController::class, 'status'])->name('admin.user.status');
Route::get('application-status/{status}/{id}', [ApplicationController::class, 'status'])->name('admin.application.status');
Route::get('application-view/{id}', [ApplicationController::class, 'view'])->name('admin.application.view');
Route::post('change-password', [AdminController::class, 'changePasswordReq'])->name('admin.change.password.req');
Route::get('profile-delete/{id}', [UserController::class, 'destroy'])->name('admin.user.destroy');
Route::get('application-delete/{id}', [ApplicationController::class, 'destroy'])->name('admin.application.destroy');
Route::get('delete-duration/{id}', [AdminController::class, 'durationDelete'])->name('duration.delete');
Route::post('duration', [AdminController::class, 'durationReq'])->name('duration.req');
Route::post('update-duration/{id}', [AdminController::class, 'durationUpdate'])->name('duration.update');
Route::post('coupon', [AdminController::class, 'couponReq'])->name('admin.coupon.req');
Route::post('update-coupon/{id}', [AdminController::class, 'couponUpdate'])->name('admin.coupon.update');
Route::get('delete-coupon/{id}', [AdminController::class, 'deleteCoupon'])->name('admin.coupon.delete');

// PDF Download
Route::get('application-download/{id}', [ApplicationController::class, 'applicationDownload'])->name('application.download');
Route::get('profile-download/{id}', [ProfileController::class, 'profileDownload'])->name('profile.download');
