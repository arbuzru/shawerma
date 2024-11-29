<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
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
            'user_id' => 'required|exists:users,id',        // Привязка к пользователю
            'products' => 'required|array',               // Массив товаров
            'shipping_address' => 'nullable|string',      // Адрес доставки
            'delivery_type' => 'required|string',         // Тип доставки (Delivery / Pickup)
            'pickup_point' => 'nullable|string',          // Пункт самовывоза, если выбран самовывоз
        ]);

        $totalAmount = 0;
        $products = [];

        // Обработка списка товаров
        foreach ($validated['products'] as $product) {
            $productData = Product::find($product['product_id']);  // Получаем данные продукта

            if ($productData) {
                $products[] = [
                    'product_id' => $productData->id,
                    'quantity' => $product['quantity'],
                    'price' => $productData->price,
                ];
                $totalAmount += $productData->price * $product['quantity'];
            }
        }

        // Создание заказа
        $order = Order::create([
            'user_id' => $validated['user_id'],
            'total_amount' => $totalAmount,
            'status' => 'new',
            'shipping_address' => $validated['shipping_address'] ?? null, // Только для доставки
            'delivery_type' => $validated['delivery_type'],             // Pickup или Delivery
            'pickup_point' => $validated['pickup_point'] ?? null,       // Только для самовывоза
        ]);

        // Сохранение товаров в заказ
        foreach ($products as $product) {
            $order->orderItems()->create($product);
        }

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
            'delivery_type' => 'required|string',
            'pickup_point' => 'nullable|string',
            'shipping_address' => 'nullable|string',
            'status' => 'required|string',
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
