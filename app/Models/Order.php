<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // Указание, какие поля можно заполнять через массовое присваивание
    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'shipping_address',
        'delivery_type',
        'pickup_point',
        'latitude',
        'longitude',
        'persons',
        'total_amount',
        'status'
    ];

    // Отношение с пользователем
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Отношение с товарами заказа (многие к одному)
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    // Отношение с оплатой
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}
