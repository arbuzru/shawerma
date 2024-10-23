<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function index(Order $order)
    {
        $orderItems = $order->items()->with('product')->get();
        return view('order_items.index', compact('orderItems', 'order'));
    }

    public function create(Order $order)
    {
        $products = Product::all();
        return view('order_items.create', compact('order', 'products'));
    }

    public function store(Request $request, Order $order)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $orderItem = new OrderItem($validated);
        $order->items()->save($orderItem);
        return redirect()->route('order_items.index', $order)->with('success', 'Order item added successfully.');
    }

    public function edit(Order $order, OrderItem $orderItem)
    {
        $products = Product::all();
        return view('order_items.edit', compact('order', 'orderItem', 'products'));
    }

    public function update(Request $request, Order $order, OrderItem $orderItem)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $orderItem->update($validated);
        return redirect()->route('order_items.index', $order)->with('success', 'Order item updated successfully.');
    }

    public function destroy(Order $order, OrderItem $orderItem)
    {
        $orderItem->delete();
        return redirect()->route('order_items.index', $order)->with('success', 'Order item deleted successfully.');
    }
}

