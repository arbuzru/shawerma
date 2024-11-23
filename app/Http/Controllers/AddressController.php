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
        // Получить адреса текущего пользователя
        $user = auth()->user();
        $addresses = $user->addresses; // Связанные адреса

        return view('shopping-cart-address', compact('user', 'addresses'));
    }

        // Страница для создания нового адреса
        public function create(User $user)
        {
            return view('addresses.create', compact('user'));
        }

        // Сохранение нового адреса пользователя
        public function store(Request $request, User $user)
        {
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
          return view('addresses.edit', compact('address'));
        }

        // Обновление существующего адреса
        public function update(Request $request, Address $address)
        {
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
            $user = $address->user;  // Получаем пользователя, к которому относится адрес
            $address->delete();  // Удаляем адрес
            return redirect()->route('addresses.index', $user)->with('success', 'Address deleted successfully.');
        }
}
