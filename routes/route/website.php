<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WebDesaWisataController;
use App\Http\Controllers\Web\WebKontakWisataController;
use App\Http\Controllers\Web\WebKalenderWisataController;
use App\Http\Controllers\Web\WebPetaWisataController;
use App\Http\Controllers\Web\WebAtraksiWisataController;
use App\Http\Controllers\Web\WebFasilitasController;
use App\Http\Controllers\Web\WebTamanNasionalController;
use App\Http\Controllers\Web\DetailAtraksiController;

Route::resource('/', WebDesaWisataController::class);
Route::resource('desa-wisata', WebDesaWisataController::class);
Route::resource('taman', WebTamanNasionalController::class);
Route::resource('kontak-wisata', WebKontakWisataController::class);
Route::resource('kalender-wisata', WebKalenderWisataController::class);
Route::resource('peta-wisata', WebPetaWisataController::class);
Route::get('berita/{berita}', [WebKontakWisataController::class, 'show']);

Route::get('fasilitas/{kategori_fasilitas}',[WebFasilitasController::class,'index']);
Route::get('detail-fasilitas/{fasilitas}',[WebFasilitasController::class,'show']);

Route::get('atraksi/{kategori}',[WebAtraksiWisataController::class,'index']);
Route::get('atraksi-wisata/{atraksi_wisata}',[WebAtraksiWisataController::class,'show']);