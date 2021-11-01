<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ChangeProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\GedungController;
use App\Http\Controllers\PersyaratanController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\LaporanController;

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

Auth::routes(['register' => false]);

// untuk masyarakat
Route::get('/',[HomeController::class, 'index'])->name('index');
Route::get('/rusunawa', [HomeController::class, 'listRusunawa'])->name('listRusunawa');
Route::get('/rusunawa/{gedung}', [HomeController::class, 'detailRusunawa'])->name('detailRusunawa');
Route::get('/persyaratan', [HomeController::class, 'persyaratan'])->name('persyaratan');
Route::get('/keluhan', [HomeController::class, 'keluhan'])->name('keluhan');
Route::post('/keluhan', [HomeController::class, 'keluhanStore'])->name('keluhanStore');
Route::get('/pendaftaran', [HomeController::class, 'pendaftaran'])->name('pendaftaran');
Route::post('/pendaftaran', [HomeController::class, 'pendaftaranStore'])->name('pendaftaranStore');
Route::get('/pendaftaran/{pendaftaran}', [HomeController::class, 'pendaftaranSelesai'])->name('pendaftaranSelesai');
Route::get('/pendaftaran/{pendaftaran}/cetak_berkas', [HomeController::class, 'cetakBerkas'])->name('cetakBerkas');



// untuk admin
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
	Route::resource('users', UserController::class)->except(['create', 'show', 'edit']);
});

// untuk pengelola
Route::group(['prefix' => 'admin', 'middleware' => 'pengelola'], function() {
	Route::resource('settings', SettingController::class)->except(['create', 'show', 'edit', 'destroy']);
	Route::get('/fasilitas/select', [FasilitasController::class, 'select'])->name('fasilitas.select');
	Route::resource('fasilitas', FasilitasController::class)->except(['create', 'edit', 'show']);
	Route::delete('galleries/{gallery}/', [GedungController::class, 'delete'])->name('gedung.delete');
	Route::get('/gedung/select', [GedungController::class, 'select'])->name('gedung.select');
	Route::resource('gedung', GedungController::class)->except('show');
	Route::resource('persyaratan', PersyaratanController::class)->only(['edit', 'update' ]);
	Route::resource('keluhan', KeluhanController::class)->except(['create', 'edit', 'show', 'store']);
	Route::resource('pendaftaran', PendaftaranController::class)->except(['create', 'edit', 'show', 'store']);
	Route::get('/laporan/keluhan', [LaporanController::class, 'laporanKeluhan'])->name('laporanKeluhan');
	Route::get('/laporan/pendaftaran', [LaporanController::class, 'laporanPendaftaran'])->name('laporanPendaftaran');
});

// untuk admin dan pengelola
Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/ubah_kata_sandi', [ChangePasswordController::class, 'showChangePasswordForm']);
Route::post('/ubah_kata_sandi', [ChangePasswordController::class, 'changePassword'])->name('changePassword');
Route::get('/ubah_profil', [ChangeProfileController::class, 'showChangeProfileForm']);
Route::post('/ubah_profil', [ChangeProfileController::class, 'changeProfile'])->name('changeProfile');
	