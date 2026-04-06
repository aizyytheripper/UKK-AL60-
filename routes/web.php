<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AspirasiController;

Route::get('/', fn() => view('index'));

// Login & Register
Route::get('/login/siswa', fn() => view('login_siswa'));
Route::get('/login/admin', fn() => view('login_admin'));
Route::get('/register', fn() => view('register'));

Route::post('/login/siswa', [AuthController::class, 'loginSiswa'])->name('login.siswa');
Route::post('/login/admin', [AuthController::class, 'loginAdmin'])->name('login.admin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/register/siswa', [AuthController::class, 'registerSiswa'])->name('register.siswa');

// Dashboard
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

// Aspirasi
Route::get('/aspirasi/create', [AspirasiController::class, 'create'])->name('aspirasi.create');
Route::post('/aspirasi/store', [AspirasiController::class, 'store'])->name('aspirasi.store');

// Siswa (admin only)
Route::get('/siswa/create', [AuthController::class, 'createSiswa'])->name('siswa.create');
Route::post('/siswa/store', [AuthController::class, 'registerSiswa'])->name('siswa.store');

// Feedback aspirasi (admin)
Route::get('/aspirasi/{id}/feedback', [AspirasiController::class, 'showFeedbackForm'])->name('aspirasi.feedback.form');
Route::post('/aspirasi/{id}/feedback', [AspirasiController::class, 'feedback'])->name('aspirasi.feedback');
