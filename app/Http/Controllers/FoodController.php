<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function showDetails()
    {
        return view('food-details');  // Возвращает страницу с деталями
    }
}
