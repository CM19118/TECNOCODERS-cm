<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Título principal
            $table->text('description'); // Descripción
            $table->string('image')->nullable(); // Imagen opcional
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('about');
    }
};
