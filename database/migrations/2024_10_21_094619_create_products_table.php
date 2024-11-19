<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Автоинкрементируемый id
            $table->string('name'); // Название продукта
            $table->decimal('price', 8, 2); // Цена продукта с двумя знаками после запятой
            $table->text('description')->nullable(); // Описание продукта (необязательно)
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Внешний ключ на таблицу категорий
            $table->string('image')->nullable(); // Путь к изображению (необязательно)
            $table->timestamps(); // created_at и updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
