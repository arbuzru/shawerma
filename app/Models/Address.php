<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    // Разрешенные для массового заполнения поля
    protected $fillable = [
        'user_id',
        'address_line',
        'city',
        'state',
        'zip_code', // Исправлено
        'country',
        'phone',
        'address', // Если нужно
    ];


    // Связь с таблицей users
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
