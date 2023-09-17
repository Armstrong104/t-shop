<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


// For frontend
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[AboutController::class,'index'])->name('about');


// For backend

Route::get('/dashboard',[AdminDashboardController::class,'index'])->name('dashboard');
Route::get('/add-product',[ProductController::class,'create'])->name('create');
Route::get('/products',[ProductController::class,'index'])->name('products');
Route::post('/store-product',[ProductController::class,'store'])->name('store');
Route::get('/delete-product/{id}',[ProductController::class,'destroy'])->name('destroy');
Route::get('/edit-product/{id}',[ProductController::class,'edit'])->name('edit');
Route::post('/update-product/{id}',[ProductController::class,'update'])->name('update');
