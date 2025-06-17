<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\kasir_userController;
use App\Models\kasir_user;

use App\Http\Controllers\Api\obat_transaksiController;
use App\Models\obat_transaksi;

use App\Http\Controllers\Api\tindakan_transaksiController;
use App\Models\tindakan_transaksi;

use App\Http\Controllers\Api\tindakanController;
use App\Models\tindakan;

use App\Http\Controllers\Api\transaksiController;
use App\Models\transaksi;

Route::get('/kasir_user', [kasir_userController::class, 'index']);
Route::get('/kasir_user/{id}', [kasir_userController::class, 'show']);
Route::post('/kasir_user', [kasir_userController::class, 'store']);
Route::put('/kasir_user/{id}', [kasir_userController::class, 'update']);
Route::delete('/kasir_user/{id}', [kasir_userController::class, 'destroy']);

Route::get('/obat_transaksi', [obat_transaksiController::class, 'index']);
Route::get('/obat_transaksi/{id}', [obat_transaksiController::class, 'show']);
Route::post('/obat_transaksi', [obat_transaksiController::class, 'store']);
Route::put('/obat_transaksi/{id}', [obat_transaksiController::class, 'update']);
Route::delete('/obat_transaksi/{id}', [obat_transaksiController::class, 'destroy']);

Route::get('/tindakan_transaksi', [tindakan_transaksiController::class, 'index']);
Route::get('/tindakan_transaksi/{id}', [tindakan_transaksiController::class, 'show']);
Route::post('/tindakan_transaksi', [tindakan_transaksiController::class, 'store']);
Route::put('/tindakan_transaksi/{id}', [tindakan_transaksiController::class, 'update']);
Route::delete('/tindakan_transaksi/{id}', [tindakan_transaksiController::class, 'destroy']);

Route::get('/tindakan', [tindakanController::class, 'index']);
Route::get('/tindakan/{id}', [tindakanController::class, 'show']);
Route::post('/tindakan', [tindakanController::class, 'store']);
Route::put('/tindakan/{id}', [tindakanController::class, 'update']);
Route::delete('/tindakan/{id}', [tindakanController::class, 'destroy']);

Route::get('/transaksi', [transaksiController::class, 'index']);
Route::get('/transaksi/{id}', [transaksiController::class, 'show']);
Route::post('/transaksi', [transaksiController::class, 'store']);
Route::put('/transaksi/{id}', [transaksiController::class, 'update']);
Route::delete('/transaksi/{id}', [transaksiController::class, 'destroy']);

