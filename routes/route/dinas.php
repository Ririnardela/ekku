<?php


use App\Http\Controllers\Dinas\DinasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dinas\AtraksiWisataController;
use App\Http\Controllers\Dinas\FasilitasController;
use App\Http\Controllers\Dinas\TamanNasional;

Route::group(['middleware' => 'auth:dinas'], function () {
    Route::get('/', [DinasController::class, 'index']);

    Route::get('atraksi-wisata/{kategori}', [AtraksiWisataController::class, 'index']);
    Route::get('atraksi-wisata/{atraksi_wisata}/show', [AtraksiWisataController::class, 'show']);
    Route::PUT('status/{atraksi_wisata}', [AtraksiWisataController::class, 'status']);
    Route::PUT('hapus-status/{atraksi_wisata}', [AtraksiWisataController::class, 'hapusstatus']);
    Route::PUT('batal-status/{atraksi_wisata}', [AtraksiWisataController::class, 'batalstatus']);

    
    Route::get('fasilitas/{kategori_fasilitas}', [FasilitasController::class, 'index']);
    Route::get('fasilitas/{fasilitas}/show', [FasilitasController::class, 'show']);
    Route::PUT('status-fasilitas/{fasilitas}', [FasilitasController::class, 'status']);
    Route::PUT('hapus-status-fasilitas/{fasilitas}', [FasilitasController::class, 'hapusstatus']);
    Route::PUT('batal-status-fasilitas/{fasilitas}', [FasilitasController::class, 'batalstatus']);

    Route::resource('taman-nasional', TamanNasional::class);
    Route::PUT('status-taman/{taman}', [TamanNasional::class, 'status']);
    Route::PUT('hapus-status-taman/{taman}', [TamanNasional::class, 'hapusstatus']);
    Route::PUT('batal-status-taman/{taman}', [TamanNasional::class, 'batalstatus']);
});
