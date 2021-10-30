<?php

use App\Http\Controllers\MahromController;
use App\Http\Controllers\SettingKunjunganController;
use App\Http\Controllers\WaliSantriController;
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

Route::resource('/', MahromController::class);
Route::get('santri', [MahromController::class, 'santri']);
Route::get('tambahSantri', [MahromController::class, 'tambahSantri']);
Route::get('editSantri/{id}', [MahromController::class, 'editSantri']);

Route::get('waliSantri', [WaliSantriController::class, 'waliSantri']);
Route::get('tambahWaliSantri', [WaliSantriController::class, 'tambahWaliSantri']);

Route::get('kunjungan', [SettingKunjunganController::class, 'kunjungan']);
Route::get('tambahKunjungan', [SettingKunjunganController::class, 'tambahKunjungan']);



Route::get('/about', function () {
    return view('welcome');
});
