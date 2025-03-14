<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pendaftaran', [PendaftaranController::class, 'showForm'])->name('pendaftaran.form');
Route::post('/pendaftaran', [PendaftaranController::class, 'processForm'])->name('pendaftaran.process');
