<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MenuController extends Controller
{
public function index()
{
// Получаем все продукты из базы данных
$products = Product::all();

// Получаем корзину из сессии
$cart = session()->get('cart', []);

// Передаем продукты и корзину в представление
return view('menu.index', compact('products', 'cart'));
}

public function foodDetails($id)
{
// Получаем продукт по ID
$product = Product::find($id);

// Если продукт не найден, показываем ошибку 404
if (!$product) {
abort(404, 'Product not found');
}

// Получаем связанные продукты (по категории или другим критериям)
$relatedProducts = Product::where('category_id', $product->category_id)
->where('id', '!=', $product->id) // Исключаем текущий продукт
->take(4) // Ограничиваем количество связанных продуктов
->get();

// Получаем корзину из сессии
$cart = session()->get('cart', []);

// Передаем продукт, связанные товары и корзину в представление
return view('menu.food-details', compact('product', 'relatedProducts', 'cart'));
}
}
