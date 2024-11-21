<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'country', 'state', 'city', 'address'
    ];

    // Связь с заказами
    public function orders(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Order::class);
    }

    // Связь с адресами
    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    // Хеширование пароля перед сохранением
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($user) {
            if ($user->password) {
                $user->password = bcrypt($user->password);
            }
        });
    }
}
