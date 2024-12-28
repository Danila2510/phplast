<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('about',[AboutController::class,'index'])->name('about');

Route::get('category',[CategoryController::class,'index'])->name('category');

Route::get('products', [ProductController::class, 'showProducts'])->name('products');

