<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web', \App\Http\Middleware\SetLocale::class])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/services', [ServiceController::class, 'index'])->name('services');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::get('/license-pdf/{id}', [ContactController::class, 'downloadPdf'])->name('license.pdf');
});

Route::post('/language/switch', [LanguageController::class, 'switch'])->name('language.switch');
