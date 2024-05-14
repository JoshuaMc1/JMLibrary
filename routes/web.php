<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::post('/language', [LanguageController::class, 'set'])
    ->name('language.set');

Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'index')
        ->name('index');
    Route::post('/', 'login')
        ->name('login');
    Route::post('/logout', 'logout')
        ->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', fn () => view('dashboard.index'))
        ->name('dashboard.index');
});
