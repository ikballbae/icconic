<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransaksiController;
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

Route::get('/register', [AuthController::class, 'tampilRegister'])->name('auth.register');
Route::get('/login', [AuthController::class, 'tampilLogin'])->name('auth.login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/', [AppController::class, 'index'])->name('index');

    Route::get('/kasir', [KasirController::class, 'index'])->name('kasir.index');
    Route::get('/kasir/create', [KasirController::class, 'create'])->name('kasir.create');
    Route::post('/kasir/store', [KasirController::class, 'store'])->name('kasir.store');
    Route::get('/kasir/{id}/edit', [KasirController::class, 'edit'])->name('kasir.edit');
    Route::post('/kasir/{id}', [KasirController::class, 'update'])->name('kasir.update');
    Route::delete('/kasir/{id}', [KasirController::class, 'destroy'])->name('kasir.destroy');

    Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
    Route::get('/pelanggan/create', [PelangganController::class, 'create'])->name('pelanggan.create');
    Route::post('/pelanggan/store', [PelangganController::class, 'store'])->name('pelanggan.store');
    Route::get('/pelanggan/{id}/edit', [PelangganController::class, 'edit'])->name('pelanggan.edit');
    Route::post('/pelanggan/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');
    Route::delete('/pelanggan/{id}', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');

    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/product/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

    Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
    Route::post('/transaksi/store', [TransaksiController::class, 'store'])->name('transaksi.store');
    Route::post('/transaksi/{id}/update', [TransaksiController::class, 'update'])->name('transaksi.update');
    Route::post('/transaksi/checkout', [TransaksiController::class, 'checkout'])->name('transaksi.checkout');
    Route::get('/transaksi/nota', [TransaksiController::class, 'nota'])->name('transaksi.nota');

    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');
});
