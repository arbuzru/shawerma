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
    // Страница Home-02
    public function home02()
    {
        // Логика для страницы Home-02 (например, данные для Home-02)
        return view('home02');  // Шаблон для Home-02
    }
}
