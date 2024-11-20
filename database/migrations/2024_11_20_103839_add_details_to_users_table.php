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
        Schema::table('users', function (Blueprint $table) {
            $table->string('name')->nullable();       // Имя пользователя
            $table->string('phone')->nullable();      // Телефон
            $table->string('country')->nullable();    // Страна
            $table->string('state')->nullable();      // Штат
            $table->string('city')->nullable();       // Город
            $table->string('address')->nullable();    // Адрес
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['name', 'phone', 'country', 'state', 'city', 'address']);
        });
    }
};
