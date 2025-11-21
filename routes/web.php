<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TowerController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\JenisPaketController;
use App\Http\Controllers\NamaEkspedisiController;
use App\Http\Controllers\TransaksiController;

Route::get('/', function () {
    return view('welcome');
});

// LOGIN
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProses'])->name('loginProses');

// LOGOUT
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('checkLogin')->group(function () {
    // DASHBOARD
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // USER
    Route::get('user', [UserController::class, 'index'])->name('user');

    // TOWER
    Route::get('tower', [TowerController::class, 'index'])->name('tower');

    // UNIT
    Route::get('unit', [UnitController::class, 'index'])->name('unit');

    // TENANT
    Route::get('tenant', [TenantController::class, 'index'])->name('tenant');

    // CONTRACT
    Route::get('contract', [ContractController::class, 'index'])->name('contract');

    //JENIS TRANSAKSI
    Route::get('jenispaket', [JenisPaketController::class, 'index'])->name('jenispaket');

    // NAMA EKSPEDISI
    Route::get('namaekspedisi', [NamaEkspedisiController::class, 'index'])->name('namaekspedisi');

    //
    Route::get('transaksi', [TransaksiController::class, 'index'])->name('transaksi');
});


// // DASHBOARD
// Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

// // USER
// Route::get('user', [UserController::class, 'index'])->name('user');

// // TOWER
// Route::get('tower', [TowerController::class, 'index'])->name('tower');

// // UNIT
// Route::get('unit', [UnitController::class, 'index'])->name('unit');

// // TENANT
// Route::get('tenant', [TenantController::class, 'index'])->name('tenant');

// // CONTRACT
// Route::get('contract', [ContractController::class, 'index'])->name('contract');

// //JENIS TRANSAKSI
// Route::get('jenispaket', [JenisPaketController::class, 'index'])->name('jenispaket');

// // NAMA EKSPEDISI
// Route::get('namaekspedisi', [NamaEkspedisiController::class, 'index'])->name('namaekspedisi');

// //
// Route::get('transaksi', [TransaksiController::class, 'index'])->name('transaksi');
