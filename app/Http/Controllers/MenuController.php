<?php

namespace App\Http\Controllers;

use App\Models\Dish; // Импортируй модель Dish
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        // Получаем все блюда
        $dishes = Dish::all();

        // Возвращаем представление с переданными блюдами
        return view('menu.index', compact('dishes'));
    }
}

