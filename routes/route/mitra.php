<?php

use App\Http\Controllers\Mitra\AtraksiWisataController;
use App\Http\Controllers\Mitra\MitraController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:mitra'], function () {
    Route::get('/', [MitraController::class, 'index']);

    Route::get('atraksi-wisata/{kategori}', [AtraksiWisataController::class, 'index']);
    Route::get('atraksi-wisata/{kategori}/create', [AtraksiWisataController::class, 'create']);
    Route::POST('atraksi-wisata', [AtraksiWisataController::class, 'store']);
    Route::get('atraksi-wisata/{atraksi_wisata}/show', [AtraksiWisataController::class, 'show']);
    Route::get('atraksi-wisata/{atraksi_wisata}/edit', [AtraksiWisataController::class, 'edit']);
    Route::PUT('atraksi-wisata/{katgori}/update', [AtraksiWisataController::class, 'update']);
    Route::get('atraksi-wisata/{atraksi_wisata}/delete', [AtraksiWisataController::class, 'destroy']);

    Route::PUT('rekomendasi/{atraksi_wisata}', [AtraksiWisataController::class, 'rekomendasi']);
    Route::PUT('hapus-rekomendasi/{atraksi_wisata}', [AtraksiWisataController::class, 'hapusrekomendasi']);
});
