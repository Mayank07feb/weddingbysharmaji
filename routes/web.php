<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');

Route::get('/events', [HomeController::class, 'events'])->name('events');

Route::get('/services', [HomeController::class, 'services'])->name('services');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/packages', [HomeController::class, 'packages'])->name('packages');