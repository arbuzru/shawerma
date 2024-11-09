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



        // Передаем продукт и связанные товары в представление
        return view('menu.food-details', compact('product', 'relatedProducts'));
    }

}
