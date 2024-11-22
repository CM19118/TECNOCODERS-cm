<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Título del proyecto
            $table->text('description'); // Descripción breve
            $table->string('image'); // Imagen principal
            $table->string('link')->nullable(); // Enlace opcional
            $table->string('category')->nullable(); // Categoría opcional
            $table->timestamps();
        });
        
    }

    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
