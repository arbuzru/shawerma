<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    // Отображение всех адресов пользователя
    public function index()
    {
        // Получаем фиктивного пользователя (например, первого пользователя из базы)
        $user = User::first();  // Или можно создать пользователя вручную

        // Получаем адреса этого пользователя
        $addresses = $user->addresses;  // Связанные адреса

        return view('shopping-cart-address', compact('user', 'addresses'));
    }


    // Страница для создания нового адреса
    public function create(User $user)
    {
        // Убедитесь, что пользователь аутентифицирован
        if (auth()->id() !== $user->id) {
            return redirect()->route('login')->with('error', 'Вы не можете добавить адрес для другого пользователя.');
        }

        return view('addresses.create', compact('user'));
    }

    // Сохранение нового адреса пользователя
    public function store(Request $request, User $user)
    {
        // Убедитесь, что пользователь аутентифицирован
        if (auth()->id() !== $user->id) {
            return redirect()->route('login')->with('error', 'Вы не можете добавлять адрес для другого пользователя.');
        }

        // Валидация данных, включая обязательные поля
        $validated = $request->validate([
            'address_line' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip_code' => 'required|string|max:10',
            'country' => 'required|string|max:100',
        ]);

        // Сохраняем новый адрес, связанный с пользователем
        $user->addresses()->create($validated);

        return redirect()->route('addresses.index', $user)->with('success', 'Address added successfully.');
    }

    // Страница для редактирования существующего адреса
    public function edit(Address $address)
    {
        // Убедитесь, что пользователь аутентифицирован и имеет доступ к этому адресу
        if (auth()->id() !== $address->user_id) {
            return redirect()->route('login')->with('error', 'Вы не можете редактировать адрес другого пользователя.');
        }

        return view('addresses.edit', compact('address'));
    }

    // Обновление существующего адреса
    public function update(Request $request, Address $address)
    {
        // Убедитесь, что пользователь аутентифицирован и имеет доступ к этому адресу
        if (auth()->id() !== $address->user_id) {
            return redirect()->route('login')->with('error', 'Вы не можете обновить адрес другого пользователя.');
        }

        // Валидация данных для обновления адреса
        $validated = $request->validate([
            'address_line' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip_code' => 'required|string|max:10',
            'country' => 'required|string|max:100',
        ]);

        // Обновляем адрес
        $address->update($validated);

        return redirect()->route('addresses.index', $address->user)->with('success', 'Address updated successfully.');
    }

    // Удаление адреса
    public function destroy(Address $address)
    {
        // Убедитесь, что пользователь аутентифицирован и имеет доступ к этому адресу
        if (auth()->id() !== $address->user_id) {
            return redirect()->route('login')->with('error', 'Вы не можете удалить адрес другого пользователя.');
        }

        $user = $address->user;  // Получаем пользователя, к которому относится адрес
        $address->delete();  // Удаляем адрес

        return redirect()->route('addresses.index', $user)->with('success', 'Address deleted successfully.');
    }
}
