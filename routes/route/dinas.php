<?php


use App\Http\Controllers\Dinas\DinasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dinas\AtraksiWisataController;

Route::group(['middleware' => 'auth:dinas'], function () {
    Route::get('/', [DinasController::class, 'index']);

    Route::get('atraksi-wisata/{kategori}', [AtraksiWisataController::class, 'index']);
    Route::PUT('status/{atraksi_wisata}', [AtraksiWisataController::class, 'status']);
    Route::PUT('hapus-status/{atraksi_wisata}', [AtraksiWisataController::class, 'hapusstatus']);
    Route::PUT('batal-status/{atraksi_wisata}', [AtraksiWisataController::class, 'batalstatus']);
});
