<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParfumController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReviewController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
Route::get('/shop', [PublicController::class, 'shop'])->name('shop');
Route::get('/shop/{id}', [PublicController::class, 'show'])->name('shop.show');
Route::get('/shop/{id}', [PublicController::class, 'show'])->name('show');

Route::get('/parfum/create', [ParfumController::class, 'create'])->name('parfum.create');
Route::post('/parfum/store', [ParfumController::class, 'store'])->name('parfum.store');
Route::get('/parfum/show/{parfum}', [ParfumController::class, 'show'])->name('parfum.show');
Route::get('/parfum/all', [ParfumController::class, 'index'])->name('parfum.index');

Route::get('/review/index', [ReviewController::class, 'index'])->name('review.index');
Route::post('/review/store', [ReviewController::class, 'store'])->name('review.store');
