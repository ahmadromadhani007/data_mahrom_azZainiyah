<?php

use App\Http\Controllers\WaliSantriController;
use App\Http\Controllers\MahromController;
use App\Http\Controllers\SettingKunjunganController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('wali_santri', [WaliSantriController::class, 'index']);
Route::get('wali_santri/{id}', [WaliSantriController::class, 'show']);
Route::post('wali_santri', [WaliSantriController::class, 'create']);
Route::put('wali_santri/{id}', [WaliSantriController::class, 'update']);
Route::delete('wali_santri/{id}', [WaliSantriController::class, 'destroy']);

Route::get('mahrom', [MahromController::class, 'index']);
Route::get('mahrom/{id}', [MahromController::class, 'show']);
Route::post('mahrom', [MahromController::class, 'create']);
Route::put('mahrom/{id}', [MahromController::class, 'update']);
Route::delete('mahrom/{id}', [MahromController::class, 'destroy']);

Route::get('setting_kunjungan', [SettingKunjunganController::class, 'index']);
Route::get('setting_kunjungan/{id}', [SettingKunjunganController::class, 'show']);
Route::post('setting_kunjungan', [SettingKunjunganController::class, 'create']);
Route::put('setting_kunjungan/{id}', [SettingKunjunganController::class, 'update']);
Route::delete('setting_kunjungan/{id}', [SettingKunjunganController::class, 'destroy']);
