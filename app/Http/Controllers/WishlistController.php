<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
class WishlistController extends Controller
{
    public function index()
    {
        // Данные для шаблона, можно заменить на реальные данные из базы
        $title = 'Ваш список желаемых товаров';
        $wishlistItems = [
            ['name' => 'Продукт 1', 'price' => '10.00'],
            ['name' => 'Продукт 2', 'price' => '15.00'],
        ];

        // Возвращаем представление с переданными данными
        return view('wishlist.dashboard-wishlist', compact('title', 'wishlistItems'));
    }

}
