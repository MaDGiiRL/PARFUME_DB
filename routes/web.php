<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParfumController;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/shop', [PublicController::class, 'shop'])->name('shop');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');

Route::get('/parfum/create', [ParfumController::class, 'create'])->name('parfum.create');
Route::post('/parfum/store', [ParfumController::class, 'store'])->name('parfum.store');