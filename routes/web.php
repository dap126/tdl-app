<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\DashboardController;

Route::middleware('auth')->group(function () {
    Route::get('/input-tugas', [TugasController::class, 'create'])->name('input-tugas');
    Route::post('/input-tugas', [TugasController::class, 'store'])->name('tugas.store');
    Route::resource('tugas', TugasController::class)->except(['show', 'create', 'store']);

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/list-tugas', [TugasController::class, 'index'])->name('list-tugas');

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
});

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('ldp');
    })->name('ldp');
    
    Route::get('/login', function () {
        return view('login');
    })->name('login');

    Route::get('/register', function () {
        return view('register');
    })->name('register');

    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
