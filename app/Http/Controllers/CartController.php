<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class CartController extends Controller
{

    // Метод для добавления продукта в корзину
    public function add(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1);

        // Попробуйте найти продукт по ID. Если не найден, выбрасывается исключение 404.
        $product = Product::findOrFail($productId);

        // Добавляем продукт в корзину
        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $cart[$productId] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $quantity,
            ];
        }

        // Обновляем корзину в сессии
        session()->put('cart', $cart);

        return redirect()->route('cart.view');
    }
    public function remove($productId)
    {
        $cart = session()->get('cart', []);

        // Удаляем товар из корзины
        if (isset($cart[$productId])) {
            unset($cart[$productId]);
        }

        // Обновляем корзину в сессии
        session()->put('cart', $cart);

        return redirect()->route('cart.view');
    }


    // Метод для отображения корзины

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    // Метод для отображения корзины
    public function view()
    {
        // Получаем корзину из сессии
        $cart = session()->get('cart', []);

        // Пересчитываем стоимость
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        // Передаем данные в представление
        return view('cart.view', compact('cart', 'total'));
    }
    public function update(Request $request, $productId)
    {
        $quantity = max(1, $request->input('quantity')); // Убедимся, что количество не меньше 1
        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] = $quantity;
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Количество товара обновлено.');
    }


}


