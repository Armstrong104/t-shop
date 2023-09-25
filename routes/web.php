<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


// For frontend
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/show-product-details/{id}',[ProductController::class,'show'])->name('show');


// For backend

Route::get('/dashboard',[AdminDashboardController::class,'index'])->name('dashboard');
Route::resource('products', ProductController::class);
