<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('company'); // Nombre de la empresa
            $table->string('logo'); // Logo de la empresa
            $table->string('position'); // Título del puesto
            $table->date('start_date'); // Fecha de inicio
            $table->date('end_date')->nullable(); // Fecha de término
            $table->text('description')->nullable(); // Descripción de las responsabilidades
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('works');
    }
};
