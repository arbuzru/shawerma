<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function foodDetails()
    {
        return view('food-details'); // или какие-то данные
    }
}
