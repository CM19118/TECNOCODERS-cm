<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Título del servicio
            $table->text('description'); // Descripción del servicio
            $table->decimal('price', 8, 2); // Precio del servicio
            $table->string('duration'); // Duración estimada
            $table->string('icon'); // Icono del servicio
            $table->string('image')->nullable(); // Imagen opcional del servicio
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('services');
    }
};
