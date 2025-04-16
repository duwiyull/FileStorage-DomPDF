<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\LaporanController;

Route::get('/', function () {
    return view('welcome');

});


Route::get('/upload', [UploadController::class, 'form']);
Route::post('/upload', [UploadController::class, 'upload'])->name('file.upload');

Route::get('/laporan-pdf', [LaporanController::class, 'generatePDF']);