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
            'name' => 'required|string',                   // Имя
            'phone' => 'required|string',                  // Телефон
            'shipping_address' => 'nullable|string',       // Адрес доставки
            'delivery_type' => 'required|string',          // Тип доставки (Delivery / Pickup)
            'pickup_point' => 'nullable|string',           // Пункт самовывоза, если выбран самовывоз
            'latitude' => 'nullable|numeric',              // Широта для карты
            'longitude' => 'nullable|numeric',             // Долгота для карты
            'persons' => 'required|integer|min:1',         // Количество персон
            'products' => 'required|array',                // Список продуктов
            'products.*.product_id' => 'required|exists:products,id', // Проверка существования продукта
            'products.*.quantity' => 'required|integer|min:1', // Количество товара
        ]);

        // Переменная для хранения общей суммы
        $totalAmount = 0;
        $products = [];

        // Обработка списка товаров
        foreach ($validated['products'] as $product) {
            $productData = Product::find($product['product_id']);  // Получаем данные продукта

            if ($productData) {
                // Добавляем товар в массив
                $products[] = [
                    'product_id' => $productData->id,
                    'quantity' => $product['quantity'],
                    'price' => $productData->price,
                ];
                // Добавляем стоимость товара в общую сумму
                $totalAmount += $productData->price * $product['quantity'];
            }
        }

        // Создаём заказ
        $order = Order::create([
            'user_id' => auth()->id(),                         // Пользователь, который сделал заказ
            'total_amount' => $totalAmount,                     // Общая стоимость
            'status' => 'new',                                  // Статус нового заказа
            'shipping_address' => $validated['shipping_address'] ?? null, // Адрес доставки
            'delivery_type' => $validated['delivery_type'],     // Тип доставки
            'pickup_point' => $validated['pickup_point'] ?? null, // Пункт самовывоза
            'latitude' => $validated['latitude'] ?? null,       // Широта
            'longitude' => $validated['longitude'] ?? null,     // Долгота
            'persons' => $validated['persons'],                 // Количество персон
        ]);

        // Сохраняем товарные позиции для заказа
        foreach ($products as $product) {
            $order->orderItems()->create([
                'product_id' => $product['product_id'],
                'quantity' => $product['quantity'],
                'price' => $product['price'],
            ]);
        }

        // Возвращаем успешный ответ или редирект
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
            'name' => 'required|string',
            'phone' => 'required|string',
            'shipping_address' => 'nullable|string',
            'delivery_type' => 'required|string',
            'pickup_point' => 'nullable|string',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'status' => 'required|string',
            'persons' => 'required|integer|min:1',
        ]);

        $order->update($validated);

        return redirect()->route('orders.index')->with('success', 'Заказ обновлен успешно.');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Заказ удален успешно.');
    }
}

