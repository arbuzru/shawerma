<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user')->get();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $users = User::all();
        return view('orders.create', compact('users'));
    }

    public function store(Request $request)
    {
        // Проводим валидацию данных
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',  // Убедитесь, что указан правильный пользователь
            'products' => 'required|array',           // Массив с продуктами
            'shipping_address' => 'required|string',  // Адрес доставки
        ]);

        // Рассчитываем общую сумму заказа
        $totalAmount = 0;
        $products = [];

        // Добавляем товары в заказ
        foreach ($validated['products'] as $product) {
            $productData = Product::find($product['product_id']);  // Получаем данные продукта по его ID

            if ($productData) {
                // Добавляем информацию о продукте в массив
                $products[] = [
                    'product_id' => $productData->id,
                    'quantity' => $product['quantity'],  // Количество товара
                    'price' => $productData->price,      // Цена продукта
                ];
                // Рассчитываем общую сумму
                $totalAmount += $productData->price * $product['quantity'];
            }
        }

        // Создаем заказ в базе данных
        $order = Order::create([
            'user_id' => $validated['user_id'],
            'total_amount' => $totalAmount,  // Сохраняем общую сумму заказа
            'status' => 'new',  // Статус по умолчанию
            'shipping_address' => $validated['shipping_address'],
            'payment_status' => 'pending',  // Статус оплаты по умолчанию
            'products' => json_encode($products),  // Сохраняем продукты в формате JSON
        ]);

        // Перенаправляем с сообщением об успешном создании
        return redirect()->route('orders.index')->with('success', 'Order created successfully.');
    }


    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        $users = User::all();
        return view('orders.edit', compact('order', 'users'));
    }

    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'payment_id' => 'nullable|exists:payments,id',
        ]);

        $order->update($validated);
        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
    }
}

