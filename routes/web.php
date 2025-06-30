<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TugasController;

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/input-tugas', function () {
        return view('input-tugas');
    })->name('input-tugas');

    Route::get('/list-tugas', [TugasController::class, 'index'])->name('list-tugas');

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::get('input-tugas', [TugasController::class, 'create'])
        ->name('tugas.create');
    
    Route::post('list-tugas', [TugasController::class, 'store'])
        ->name('tugas.store');
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
