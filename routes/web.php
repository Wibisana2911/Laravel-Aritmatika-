<?php

use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\PenguranganController;
use App\Http\Controllers\PerkalianController;
use App\Http\Controllers\PembagianController;

use Illuminate\Support\Facades\Route;

// Route standar menampilkan menu awal
Route::get('/', function () {
    return view('home');
});


// Route method GET dan POST perhitungan Kalkulator
Route::get('/kalkulator', [KalkulatorController::class,'index'])->name('kalkulator');
Route::post('/kalkulator', [KalkulatorController::class,'hitung'])->name('kalkulator');

Route::get('/pengurangan', [PenguranganController::class,'index'])->name('pengurangan');
Route::post('/pengurangan', [PenguranganController::class,'hitung'])->name('pengurangan');

Route::get('/perkalian', [PerkalianController::class,'index'])->name('perkalian');
Route::post('/perkalian', [PerkalianController::class,'hitung'])->name('perkalian');

Route::get('/pembagian', [PembagianController::class,'index'])->name('pembagian');
Route::post('/pembagian', [PembagianController::class,'hitung'])->name('pembagian');