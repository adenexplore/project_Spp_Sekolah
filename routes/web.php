<?php

use App\Http\Controllers\HistoriController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SppController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('auth.login');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('kelas', KelasController::class);
Route::resource('siswa', SiswaController::class);
Route::resource('petugas', UserController::class);
Route::resource('spp', SppController::class);
Route::resource('laporan', LaporanController::class);
Route::resource('pembayaran', PembayaranController::class);
Route::resource('histori', HistoriController::class);

Route::get('/exportexcel', [PembayaranController::class, 'exportexcel'])->middleware(['auth'])->name('exportexcel');
Route::get('/struk', [LaporanController::class, 'struk'])->middleware(['auth'])->name('struk');
Route::post('/siswa/import_excel', 'SiswaController@import_excel');

// Auth::routes();
// route untuk logout
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

require __DIR__.'/auth.php';
