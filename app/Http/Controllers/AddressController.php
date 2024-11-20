<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(User $user)
    {
        $addresses = $user->addresses;
        return view('addresses.index', compact('addresses', 'user'));
    }

    public function create(User $user)
    {
        return view('addresses.create', compact('user'));
    }

    public function store(Request $request, User $user)
    {
        $validated = $request->validate([
            'address_line' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip_code' => 'required|string|max:10',
            'country' => 'required|string|max:100',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
        ]);

        // Сохраняем новый адрес для пользователя
        $user->addresses()->create($validated);

        return redirect()->route('addresses.index', $user)->with('success', 'Address added successfully.');
    }


    public function edit(Address $address)
    {
        return view('addresses.edit', compact('address'));
    }

    public function update(Request $request, Address $address)
    {
        $validated = $request->validate([
            'address_line' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip_code' => 'required|string|max:10',
            'country' => 'required|string|max:100',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
        ]);

        $address->update($validated);

        return redirect()->route('addresses.index', $address->user)->with('success', 'Address updated successfully.');
    }


    public function destroy(Address $address)
    {
        $user = $address->user;
        $address->delete();
        return redirect()->route('addresses.index', $user)->with('success', 'Address deleted successfully.');
    }
}

