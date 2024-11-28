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
        $cart = [
            [
                'name' => 'Item 1',
                'image' => '/images/item1.png',
                'price' => 22.00,
                'size' => 'Default',
            ],
            [
                'name' => 'Item 2',
                'image' => '/images/item2.png',
                'price' => 27.00,
                'size' => 'Default',
            ]
        ];

        $subtotal = collect($cart)->sum('price');
        $discount = 12.00;
        $delivery_charges = 10.00;
        $total = $subtotal - $discount + $delivery_charges;

        return view('checkout.index', compact('cart', 'subtotal', 'discount', 'delivery_charges', 'total'));
    }


    // Обработать создание заказа
    public function store(Request $request)
    {
        // Проверка, что корзина не пуста
        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('checkout.index')->with('error', 'Корзина пуста');
        }

        // Проводим валидацию данных заказа
        $validated = $request->validate([
            'shipping_address' => 'required|string',
            'payment_method' => 'required|string',
        ]);

        // Создаем новый заказ
        $order = Order::create([
            'user_id' => Auth::id(), // Привязываем заказ к текущему пользователю
            'total_amount' => $this->calculateTotal($cart), // Рассчитываем общую сумму
            'status' => 'new', // Статус заказа
            'shipping_address' => $validated['shipping_address'],
            'payment_status' => 'pending', // Статус оплаты
        ]);

        // Добавляем товары из корзины в заказ
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
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        return $total;
    }
}
