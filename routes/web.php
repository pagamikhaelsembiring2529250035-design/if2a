<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentang', function () {
    return view('Tentang');
});


Route::resource('Fakultas', FakultasController::class);
Route::resource('Periode', PeriodeController::class);
Route::get('Prodi', [ProdiController::class,'index']);