<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Category extends Model
{


    // Разрешенные для массового присвоения атрибуты
    protected $fillable = ['name'];


    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
