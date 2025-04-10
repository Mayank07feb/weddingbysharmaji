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

Route::get('/booking', [HomeController::class, 'booking'])->name('booking');

Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');

Route::get('/weddings', [HomeController::class, 'weddings'])->name('weddings');
Route::get('/pre-wedding', [HomeController::class, 'preWedding'])->name('pre-wedding');
Route::get('/portraits', [HomeController::class, 'portraits'])->name('portraits');
Route::get('/products', [HomeController::class, 'products'])->name('products');