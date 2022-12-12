<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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

//Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('login');

Route::get('/', [CustomAuthController::class, 'index'])->name('login');

Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');
Route::get('event', [CustomAuthController::class, 'event'])->name('event');


Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('upgrade', [CustomAuthController::class, 'upgrade'])->name('register.upgrade');
Route::get('updatesubcribed', [CustomAuthController::class, 'updatesubcribed'])->name('unsubscribed');


Route::get('congratulation', [CustomAuthController::class, 'congratulation'])->name('upgrade.congratulation');


Route::get('pay', [CustomAuthController::class, 'pay'])->name('pembayaran.member');
Route::get('payGold', [CustomAuthController::class, 'payGold'])->name('pembayaran.memberGold');
Route::post('addpay', [CustomAuthController::class, 'addpay'])->name('update-addpay');
Route::get('listpembayaran', [CustomAuthController::class, 'listpembayaran'])->name('admin.listpembayaran');


Route::get('verifikasi/{id}', [CustomAuthController::class, 'verifikasi'])->name('verifikasi');
Route::post('verifikasipay', [CustomAuthController::class, 'verifikasipay'])->name('verifikasipay');

