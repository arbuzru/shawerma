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
        Schema::table('orders', function (Blueprint $table) {
            // Проверка, если столбец не существует, то добавляем
            if (!Schema::hasColumn('orders', 'name')) {
                $table->string('name');
            }
            if (!Schema::hasColumn('orders', 'phone')) {
                $table->string('phone');
            }
            if (!Schema::hasColumn('orders', 'shipping_address')) {
                $table->text('shipping_address')->nullable();
            }
            if (!Schema::hasColumn('orders', 'delivery_type')) {
                $table->string('delivery_type');
            }
            if (!Schema::hasColumn('orders', 'pickup_point')) {
                $table->string('pickup_point')->nullable();
            }
            if (!Schema::hasColumn('orders', 'latitude')) {
                $table->decimal('latitude', 10, 7)->nullable();
            }
            if (!Schema::hasColumn('orders', 'longitude')) {
                $table->decimal('longitude', 10, 7)->nullable();
            }
            if (!Schema::hasColumn('orders', 'persons')) {
                $table->integer('persons')->default(1);
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            // Удаление столбцов
            $table->dropColumn([
                'name',
                'phone',
                'shipping_address',
                'delivery_type',
                'pickup_point',
                'latitude',
                'longitude',
                'persons',
            ]);
        });
    }
};
