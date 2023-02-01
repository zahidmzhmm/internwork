<?php


use App\Http\Controllers\Admin\AdminController;
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
