<?php

use App\Http\Controllers\Site\AuthController;
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


// Custom Authentication Get Request
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/verification/verify', [AuthController::class, 'verify'])->name('verification.sent');
Route::get('/password/reset', [AuthController::class, 'reset'])->name('password.request');
Route::get('/password/change', [AuthController::class, 'passwordChange'])->name('password.change');
Route::get('/password/confirm', [AuthController::class, 'passwordReq'])->name('password.confirm');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Custom Authentication Post Request
Route::post('/login', [AuthController::class, 'loginReq'])->name('login.post');
Route::post('/register', [AuthController::class, 'registerReq'])->name('register.post');
Route::post('/password/email', [AuthController::class, 'passwordEmail'])->name('password.email');
Route::post('/password/reset', [AuthController::class, 'passwordUpdate'])->name('password.update');
Route::post('/password/change', [AuthController::class, 'passwordConfirm'])->name('password.confirm.req');
Route::post('/verification/check', [AuthController::class, 'verification'])->name('verification.check');

// Admin Authentication Get Request
Route::get('admin/login', [AuthController::class, 'login'])->name('admin.login');
