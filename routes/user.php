<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\ProfileController;
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


Route::get('/', [HomeController::class, 'index'])->name('account');
Route::get('profile-update', [ProfileController::class, 'profileEdit'])->name('profile.u.edit');
Route::post('profile-update', [ProfileController::class, 'profileUpdate'])->name('profile.u.update');