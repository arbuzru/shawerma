<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Другие методы и свойства

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
