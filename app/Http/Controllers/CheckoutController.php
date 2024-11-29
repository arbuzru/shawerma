<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    // Показать страницу оформления заказа
    public function index()
    {
        // Получаем корзину из сессии
        $cart = session()->get('cart', [
            [
                'product_id' => 1,
                'name' => 'Item 1',
                'image' => '/images/item1.png',
                'price' => 22.00,
                'quantity' => 1,
                'size' => 'Default',
            ],
            [
                'product_id' => 2,
                'name' => 'Item 2',
                'image' => '/images/item2.png',
                'price' => 27.00,
                'quantity' => 1,
                'size' => 'Default',
            ],
        ]);

        // Подсчет суммы
        $subtotal = collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']);
        $discount = 12.00; // Скидка
        $delivery_charges = 10.00; // Стоимость доставки
        $total = $subtotal - $discount + $delivery_charges;

        // Возвращаем данные в шаблон
        return view('checkout.index', compact('cart', 'subtotal', 'discount', 'delivery_charges', 'total'));
    }

    // Обработать создание заказа
    public function store(Request $request)
    {
        // Получаем корзину из сессии
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->route('checkout.index')->with('error', 'Корзина пуста');
        }

        // Валидация данных
        $validated = $request->validate([
            'delivery_type' => 'required|string', // Тип доставки (Pickup или Delivery)
            'pickup_point' => 'nullable|string', // Пункт самовывоза (если Pickup)
            'shipping_address' => 'nullable|string', // Адрес доставки (если Delivery)
            'payment_method' => 'required|string', // Способ оплаты
            'latitude' => 'nullable|numeric', // Широта
            'longitude' => 'nullable|numeric', // Долгота
        ]);

        // Создаем новый заказ
        $order = Order::create([
            'user_id' => Auth::id(),
            'total_amount' => $this->calculateTotal($cart),
            'status' => 'new',
            'delivery_type' => $validated['delivery_type'],
            'pickup_point' => $validated['delivery_type'] === 'Pickup' ? $validated['pickup_point'] : null,
            'shipping_address' => $validated['delivery_type'] === 'Delivery' ? $validated['shipping_address'] : null,
            'latitude' => $validated['latitude'], // Сохранение координат
            'longitude' => $validated['longitude'], // Сохранение координат
            'payment_status' => 'pending',
        ]);

        // Добавляем товары в заказ
        foreach ($cart as $item) {
            $order->orderItems()->create([
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }

        // Очищаем корзину после оформления заказа
        session()->forget('cart');

        return redirect()->route('orders.index')->with('success', 'Заказ успешно оформлен.');
    }

    // Рассчитать общую сумму корзины
    private function calculateTotal($cart)
    {
        return collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']);
    }
}
