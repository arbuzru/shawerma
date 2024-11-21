<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

        class UserController extends Controller
        {
            public function index()
            {
            $users = User::all();
            return view('users.index', compact('users'));
        }

        public function create()
        {
         return view('users.create');
        }

        public function store(Request $request)
        {
            $validated = $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'nullable|string|max:20',
            'role' => 'nullable|string|max:100',
            ]);

            // Хеширование пароля
            $validated['password'] = bcrypt($validated['password']);

            // Создание нового пользователя
            $user = User::create($validated);

            return redirect()->route('users.index')->with('success', 'User created successfully.');
        }

        public function show(User $user)
        {
         return view('users.show', compact('user'));
        }

        public function edit(User $user)
        {
         return view('users.edit', compact('user'));
        }

        public function update(Request $request, User $user)
        {
            $validated = $request->validate([
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'phone' => 'nullable|string|max:20',
            'role' => 'nullable|string|max:100',
            ]);

            // Если пароль передан, хешируем его
            if ($request->filled('password')) {
            $validated['password'] = bcrypt($validated['password']);
            } else {
                unset($validated['password']);
            }

            // Обновляем данные пользователя
            $user->update($validated);

            return redirect()->route('users.index')->with('success', 'User updated successfully.');
        }

        public function destroy(User $user)
        {
            // Удаление пользователя
            $user->delete();
            return redirect()->route('users.index')->with('success', 'User deleted successfully.');
        }
}
