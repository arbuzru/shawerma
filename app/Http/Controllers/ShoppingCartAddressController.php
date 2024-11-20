<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ShoppingCartAddressController extends Controller
{

    public function show()
    {
        // Получаем пользователей (например, 2 адреса для демонстрации)
        $user1 = User::find(1); // Первый пользователь
        $user2 = User::find(2); // Второй пользователь

        // Передаем данные в представление
        return view('shopping-cart-address', compact('user1', 'user2'));
    }
    // Метод для отображения формы
    public function index()
    {
        // Здесь можно передать данные, если нужно
        return view('shopping-cart-address');
    }

    // Метод для обработки отправленных данных
    public function store(Request $request)
    {
        // Валидация данных
        $validated = $request->validate([
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'postal_code' => 'required|string|max:20',
            'country' => 'required|string|max:100',
        ]);

        // Логика сохранения данных адреса, если нужно

        // Перенаправление или сообщение об успехе
        return redirect()->route('checkout.summary')->with('success', 'Address saved successfully!');
    }
}
