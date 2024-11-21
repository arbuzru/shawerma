<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoppingCartAddressController;
use App\Http\Controllers\AddressController;

// Админские маршруты
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
});

// Маршруты для страниц
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home-02', [HomeController::class, 'home02'])->name('home02');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
Route::get('/food-details', [FoodController::class, 'foodDetails'])->name('food-details');
/* корзина */
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'view'])->name('cart.view');
Route::post('/cart/update/{productId}', [CartController::class, 'update'])->name('cart.update');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
// Для удаления товара из корзины
Route::delete('/cart/{id}', [CartController::class, 'remove'])->name('cart.remove');


// Отображение формы адреса
Route::get('/shopping-cart-address', [ShoppingCartAddressController::class, 'show'])->name('shopping-cart-address.index');
Route::post('/shopping-cart-address', [ShoppingCartAddressController::class, 'store'])->name('shopping-cart-address.store');

// Обработка отправки адреса


Route::middleware(['auth'])->group(function () {
    Route::get('/users/{user}/addresses', [AddressController::class, 'index'])->name('addresses.index');
    Route::get('/users/{user}/addresses/create', [AddressController::class, 'create'])->name('addresses.create');
    Route::post('/users/{user}/addresses', [AddressController::class, 'store'])->name('addresses.store');
    Route::get('/addresses/{address}/edit', [AddressController::class, 'edit'])->name('addresses.edit');
    Route::put('/addresses/{address}', [AddressController::class, 'update'])->name('addresses.update');
    Route::delete('/addresses/{address}', [AddressController::class, 'destroy'])->name('addresses.destroy');
});

Route::post('/shopping-cart-address', [ShoppingCartAddressController::class, 'store'])->name('shopping-cart-address.store');


// Меню и детали продукта
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/menu/food-details/{id}', [MenuController::class, 'foodDetails'])->name('menu.food-details');

// Главная страница
Route::group(['prefix' => '/'], function () {
    Route::get('', function () {
        return view('index');
    });
});
