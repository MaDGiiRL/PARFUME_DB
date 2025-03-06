<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/shop', [PublicController::class, 'shop'])->name('shop');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/blog', [PublicController::class, 'blog'])->name('blog');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');