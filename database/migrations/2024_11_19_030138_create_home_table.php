<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('home', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Título del banner o mensaje
            $table->string('subtitle')->nullable(); // Subtítulo (opcional)
            $table->string('image')->nullable(); // Imagen asociada
            $table->string('link')->nullable(); // Enlace asociado (opcional)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('home');
    }
};
