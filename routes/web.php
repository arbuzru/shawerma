<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('categories', CategoryController::class);
});
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('products', ProductController::class);
});


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home-02', [HomeController::class, 'home02'])->name('home02');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/menu/food-details/{id}', [MenuController::class, 'foodDetails'])->name('menu.food-details');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.details');


Route::group(['prefix' => '/'], function () {
    Route::get('', function () {
        return view('index');
    });
});
