<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Админские маршруты (управление категориями и продуктами)
Route::prefix('admin')->name('admin.')->middleware('auth', 'admin')->group(function () {
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

// Маршруты для корзины
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'view'])->name('cart.view');
Route::patch('/cart/update/{productId}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/{id}', [CartController::class, 'remove'])->name('cart.remove');


// Защищенные маршруты для работы с заказами
Route::middleware(['auth'])->group(function () {
    // Просмотр всех заказов пользователя
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');

    // Просмотр деталей конкретного заказа
    Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');

    // Создание нового заказа (обычно после оформления корзины)
    Route::get('/order/create', [OrderController::class, 'create'])->name('orders.create');

    // Сохранение нового заказа (отправка данных на сервер)
    Route::post('/order', [OrderController::class, 'store'])->name('orders.store');
});

// Маршруты для оформления заказа
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');

// Защищенные маршруты для работы с адресами
Route::middleware(['auth'])->group(function () {
    // Отображение всех адресов текущего пользователя
    Route::get('/addresses', [AddressController::class, 'index'])->name('addresses.index');

    // Создание нового адреса
    Route::get('/addresses/create', [AddressController::class, 'create'])->name('addresses.create');
    Route::post('/addresses', [AddressController::class, 'store'])->name('addresses.store');

    // Редактирование существующего адреса
    Route::get('/addresses/{address}/edit', [AddressController::class, 'edit'])->name('addresses.edit');
    Route::put('/addresses/{address}', [AddressController::class, 'update'])->name('addresses.update');

    // Удаление адреса
    Route::delete('/addresses/{address}', [AddressController::class, 'destroy'])->name('addresses.destroy');
});

// Маршруты для выбора адреса при оформлении заказа
Route::middleware(['auth'])->group(function () {
    Route::get('/shopping-cart-address', [AddressController::class, 'index'])->name('shopping-cart-address.index');
    Route::post('/shopping-cart-address', [AddressController::class, 'store'])->name('shopping-cart-address.store');
});


//логин
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Защищенные маршруты
Route::middleware(['auth'])->group(function () {
    Route::get('/addresses', [AddressController::class, 'index'])->name('addresses.index');
});

// Меню и детали продукта
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/menu/food-details/{id}', [MenuController::class, 'foodDetails'])->name('menu.food-details');

// Главная страница (корневая)
Route::get('/', function () {
    return view('index');
});
