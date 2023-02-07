<?php


use App\Http\Controllers\Application\ApplicationController;
use App\Http\Controllers\Application\UploadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Payment\PaymentController;
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
Route::get('apply', [ApplicationController::class, 'apply'])->name('apply');
Route::get('payment/{ref}', [PaymentController::class, 'payment'])->name('payment');
Route::post('payment/paystack', [PaymentController::class, 'paystack'])->name('paystack');
Route::get('payment/paystack/callback', [PaymentController::class, 'paystackCallback'])->name('paystack.callback');
Route::post('payment', [PaymentController::class, 'pay'])->name('payment.pay');
Route::get('upload', [UploadController::class, 'upload'])->name('user.upload');
Route::get('download', [UploadController::class, 'download'])->name('user.download');
Route::get('appointment', [ProfileController::class, 'appointment'])->name('user.appointment');
Route::post('upload/{id}',[UploadController::class,'uploadReq'])->name('user.upload.req');
