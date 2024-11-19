<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('your_model_id')->constrained()->onDelete('cascade'); // Связь с основной таблицей
            $table->string('path'); // Путь к изображению
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('images');
    }

};
