<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index($userId)
    {
        $cartItems = Cart::with('products')->where('user_id', $userId)->get();
        return view('cart.index', compact('cartItems'));
    }

    public function add(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        Cart::create($validated);
        return redirect()->route('cart.index', $validated['user_id'])->with('success', 'Item added to cart.');
    }

    public function remove(Cart $cartItem)
    {
        $cartItem->delete();
        return redirect()->route('cart.index', $cartItem->user_id)->with('success', 'Item removed from cart.');
    }
}

