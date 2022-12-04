<?php

use App\Http\Controllers\GajiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KaryawanController;
use App\Models\Karyawan;

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


// view index
Route::get('/', [HomeController::class, 'index']);
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/jabatan', [JabatanController::class, 'index']);
Route::get('/gaji', [GajiController::class, 'index']);

// Tambah data
Route::get('/tambahKaryawan', [KaryawanController::class, 'create']);
Route::get('/tambahJabatan', [JabatanController::class, 'create']);
