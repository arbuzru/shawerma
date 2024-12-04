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
        Schema::table('order_items', function (Blueprint $table) {
            // Добавление нового столбца
            $table->string('new_column')->nullable();  // Добавление нового столбца 'new_column'

            // Изменение существующего столбца (например, увеличение длины строки)
            $table->decimal('price', 15, 2)->change();  // Увеличение длины для 'price'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Прежде чем удалять столбцы, проверяем их существование
        if (Schema::hasColumn('order_items', 'new_column')) {
            Schema::table('order_items', function (Blueprint $table) {
                $table->dropColumn('new_column');  // Удаляем столбец 'new_column'
            });
        }

        if (Schema::hasColumn('order_items', 'price')) {
            Schema::table('order_items', function (Blueprint $table) {
                $table->decimal('price', 10, 2)->change();  // Восстанавливаем исходное значение для 'price'
            });
        }
    }
};
