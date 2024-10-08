<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UtamaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UtamaController::class, 'index']);
Route::post('/pushData', [UtamaController::class, 'store']);

//-- Route Login & register -- //
Route::get('/login', [LoginController::class, 'index']);
Route::post('/register', [LoginController::class, 'Register'])->name('register');
Route::post('/login', [LoginController::class, 'Login'])->name('login');
Route::get('/logout', [LoginController::class, 'Logout'])->name('logout');

//-- Route AddChart -- //
Route::post('/addChart', [OrderController::class, 'Order'])->name('addChart');
Route::post('/Konfirmasi', [OrderController::class, 'konfirmasiSimpan'])->name('Konfirmasi');
Route::get('/Keranjang', [OrderController::class, 'Keranjang'])->name('Keranjang');
Route::get('/Checkout', [OrderController::class, 'Checkout'])->name('checkout');
Route::get('/checkout-List', [OrderController::class, 'checkoutList'])->name('checkoutList');
Route::get('/confirm', [OrderController::class, 'confirm'])->name('confirm');
Route::delete('/delete-keranjang{id_keranjang}', [OrderController::class, 'hapusKeranjang'])->name('delete-keranjang');
