<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPage\LandingPageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [App\Http\Controllers\LandingPage\LandingPageController::class, 'index'])->name('index');
Route::get('/sejarah', [App\Http\Controllers\Sejarah\SejarahController::class, 'index'])->name('sejarah');
Route::get('/visimisi', [App\Http\Controllers\Visimisi\VisimisiController::class, 'index'])->name('visimisi');
Route::get('/fasilitas', [App\Http\Controllers\Fasilitas\FasilitasController::class, 'index'])->name('fasilitas');
Route::get('/sambutan', [App\Http\Controllers\Sambutan\SambutanController::class, 'index'])->name('sambutan');
Route::get('/sdm', [App\Http\Controllers\Sdm\SdmController::class, 'index'])->name('sdm');
Route::get('/pengumuman', [App\Http\Controllers\Pengumuman\PengumumanController::class, 'index'])->name('pengumuman');
Route::get('/pendaftaran', [App\Http\Controllers\Pendaftaran\PendaftaranController::class, 'index'])->name('pendaftaran');
// Rute untuk menyimpan data pendaftaran
Route::post('/pendaftaran', [App\Http\Controllers\Pendaftaran\PendaftaranController::class, 'store'])->name('pendaftaran.store');

// Rute untuk detail pengumuman berdasarkan slug
Route::get('/pengumuman/{slug}', [App\Http\Controllers\Pengumuman\PengumumanController::class, 'show'])->name('pengumuman.show');
Route::get('/berita/{slug}', [App\Http\Controllers\News\NewsController::class, 'show'])->name('berita.show');
