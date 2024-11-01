<?php

namespace App\Http\Controllers;

use App\Models\Product; // Импортируй модель Product
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Получаем все продукты
        $products = Product::all();

        // Возвращаем представление с переданными продуктами
        return view('home', compact('products'));
    }
}
