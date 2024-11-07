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

        // Передаем продукты в представление
        return view('menu.index', compact('products'));
    }

    public function foodDetails($id)
    {
        // Попробуем найти продукт по ID
        $product = Product::find($id);

        // Если продукт не найден, перенаправляем на другую страницу или показываем 404
        if (!$product) {
            abort(404, 'Product not found');
        }

        // Передаем продукт в представление food-details
        return view('food-details', compact('product'));
    }

}
