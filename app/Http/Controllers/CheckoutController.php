<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class CheckoutController extends Controller
{
    public function index()
    {
        // Предположим, что у вас есть модель Order для получения данных
        // Например, получение текущего пользователя и его корзины
        $cart = session()->get('cart', []);

        // Пересчитываем общую сумму заказа
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        // Передаем данные в представление
        return view('checkout.index', compact('cart', 'total'));
    }

}
