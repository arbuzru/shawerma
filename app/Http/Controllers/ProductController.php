<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(): View|Factory|Application
    {
        $products = Product::with('category')->get();
        return view('admin.products.index', compact('products'));
    }

    public function create(): View|Factory|Application
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Валидируем данные
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048', // Проверка файла изображения
        ]);

        // Создаём новый объект Product
        $product = new Product();
        $product->name = $validated['name'];
        $product->price = $validated['price'];
        $product->description = $validated['description'] ?? null;
        $product->category_id = $validated['category_id'];

        // Обрабатываем загрузку изображения, если оно есть
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/thumb', 'public');
            $product->image = $imagePath;
        }

        // Сохраняем продукт в базе данных
        $product->save();

        // Перенаправляем с сообщением об успешном добавлении
        return redirect()->route('admin.products.index')->with('success', 'Продукт успешно добавлен.');
    }


    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        // Валидируем данные
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048', // Проверка файла изображения
        ]);

        // Обновляем данные продукта
        $product->name = $validated['name'];
        $product->price = $validated['price'];
        $product->description = $validated['description'] ?? $product->description;
        $product->category_id = $validated['category_id'];

        // Если изображение загружено, обрабатываем его
        if ($request->hasFile('image')) {
            // Удаляем старое изображение, если нужно
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }

            $imagePath = $request->file('image')->store('images/thumb', 'public');
            $product->image = $imagePath;
        }

        // Сохраняем изменения
        $product->save();

        // Перенаправляем с сообщением об успешном обновлении
        return redirect()->route('admin.products.index')->with('success', 'Продукт успешно обновлён.');
    }


    public function destroy(Product $product): RedirectResponse
    {
        // Удаление изображения (если оно существует)
        if ($product->image && Storage::exists('public/' . $product->image)) {
            Storage::delete('public/' . $product->image);
        }

        // Удаление продукта
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }
}
