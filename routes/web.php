<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Site\AuthController;
use App\Http\Controllers\Site\SiteController;
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

Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('/home', [SiteController::class, 'index'])->name('home');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/h1b', [SiteController::class, 'h1b'])->name('h1b');
Route::get('/internships', [SiteController::class, 'internships'])->name('internships');
Route::get('/privacy', [SiteController::class, 'privacy'])->name('privacy');
Route::get('/traineeships', [SiteController::class, 'traineeships'])->name('traineeships');
// Custom Authentication
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/password/reset', [AuthController::class, 'reset'])->name('password.request');
Route::get('/verification/verify', [AuthController::class, 'verify'])->name('verification.sent');
Route::get('/password/change', [AuthController::class, 'passwordChange'])->name('password.change');
Route::post('/password/email', [AuthController::class, 'passwordEmail'])->name('password.email');
Route::post('/password/reset', [AuthController::class, 'passwordUpdate'])->name('password.update');
Route::post('/password/change', [AuthController::class, 'passwordConfirm'])->name('password.confirm');
Route::get('/password/confirm', [AuthController::class, 'passwordReq'])->name('password.confirm');
Route::post('/verification/verify', [AuthController::class, 'reVerify'])->name('verification.resend');


Route::get('/account', [HomeController::class, 'index'])->name('account')->middleware('verified');
