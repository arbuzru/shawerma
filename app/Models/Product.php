<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    // Разрешенные для массового заполнения атрибуты
    protected $fillable = ['name', 'price', 'description', 'category_id', 'image'];

    // Связь с категорией
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // Связь с элементами заказов
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    // Аксессор для получения полного пути к изображению
    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }

    // Скоуп для фильтрации по категории
    public function scopeByCategory($query, $categoryId)
    {
        return $query->where('category_id', $categoryId);
    }

    // Метод для расчета цены со скидкой (пример)
    public function getDiscountedPriceAttribute()
    {
        $discount = 0.2; // Пример скидки 20%
        return $this->price - ($this->price * $discount);
    }
}
