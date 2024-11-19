<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Product extends Model
{
    protected $fillable = ['name', 'price', 'description', 'category_id', 'image'];

    // Отношение с категорией
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // Отношение с элементами заказов
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
