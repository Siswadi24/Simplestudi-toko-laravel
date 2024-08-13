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
Route::get('/Keranjang', [OrderController::class, 'Keranjang'])->name('Keranjang');
