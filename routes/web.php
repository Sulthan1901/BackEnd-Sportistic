<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\Sesicontroller;
use Illuminate\Support\Facades\Route;


// route untuk menampilkan landing page dari controller
Route::get('/', [PageController::class, 'tampilLandingPage']);

// route untuk menampilkan login page dari controller
Route::get('/login', [SesiController::class, 'tampilLogin'])->name('login.tampil');

// route untuk memanggil fungsi login
Route::post('/login/submit', [Sesicontroller::class, 'submitLogin'])->name('login.submit');

Route::get('/home', function () {
  return view('welcome');
});

// route untuk tampil registrasi dari controller
Route::get('/registrasi', [Sesicontroller::class, 'tampilRegistrasi'])->name('registrasi.tampil');
// route untuk mengpost data yang sudah disubmit
Route::post('/registrasi/submit', [Sesicontroller::class, 'submitRegistrasi'])->name('registrasi.submit');



// route untuk pagecontroller
// Route::get('/landingPage', [PageController::class, 'index']);
