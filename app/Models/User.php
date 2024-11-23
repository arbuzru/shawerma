<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'username', 'email', 'password', 'role',
    ];

    // Связь с заказами
    public function orders(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Order::class);
    }

    // Связь с адресами
    public function addresses(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Address::class);
    }

    // Хеширование пароля перед сохранением
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($user) {
            if ($user->password && !password_get_info($user->password)['algo']) {
                $user->password = bcrypt($user->password);
            }
        });
    }
}
