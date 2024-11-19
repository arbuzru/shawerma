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
        // Добавляем новое поле 'image' в таблицу 'products'
        Schema::table('products', function (Blueprint $table) {
            $table->string('image')->nullable()->after('category_id'); // Добавляем поле 'image', необязательное
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Удаляем поле 'image', если откатываем миграцию
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
};
