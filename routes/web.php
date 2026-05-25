<?php

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index']);
Route::post('/contact', [ContactController::class, 'send'])->name('contact');