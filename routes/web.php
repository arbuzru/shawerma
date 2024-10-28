<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('categories', CategoryController::class);
});



Route::get('admin/products', [ProductController::class, 'index']);
Route::get('admin/products/{id}', [ProductController::class, 'show']);
//Route::get('admin/categories', [CategoryController::class, 'index']);
//Route::get('admin/categories/{id}', [CategoryController::class, 'show']);
