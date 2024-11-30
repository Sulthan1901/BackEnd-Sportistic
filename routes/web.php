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
  return view('overview');
});
Route::get('/community', function () {
  return view('community');
});
Route::get('/add_community', function () {
  return view('add_community');
});

Route::get('/logout', [Sesicontroller::class, 'logout'])->name('logout');

Route::get('/profile', function () {
  // Halaman profil pengguna, ganti sesuai kebutuhan
  return view('profile');
})->name('profile');
Route::post('/profile/update', [Sesicontroller::class, 'updateUser'])->name('profile.update');



// route untuk tampil registrasi dari controller
Route::get('/registrasi', [Sesicontroller::class, 'tampilRegistrasi'])->name('registrasi.tampil');
// route untuk mengpost data yang sudah disubmit
Route::post('/registrasi/submit', [Sesicontroller::class, 'submitRegistrasi'])->name('registrasi.submit');

Route::get('/logout', [Sesicontroller::class, 'logout'])->name('logout');
Route::post('/update-profile', [Sesicontroller::class, 'updateUser'])->name('profile.update');
