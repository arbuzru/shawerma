<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('admin/products', [ProductController::class, 'index']);
Route::get('admin/products/{id}', [ProductController::class, 'show']);
Route::get('admin/category', [CategoryController::class, 'index']);
Route::get('admin/category/{id}', [CategoryController::class, 'show']);
