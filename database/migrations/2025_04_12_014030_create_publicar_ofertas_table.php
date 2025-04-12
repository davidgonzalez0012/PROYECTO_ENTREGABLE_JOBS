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
        Schema::create('publicar_ofertas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('categoria');
            $table->string('contrato');
            $table->string('duracion');
            $table->integer('salario');
            $table->string('descripcion');
            $table->string('educacion');
            $table->string('contacto');
            $table->string('ciudad');
            $table->string('habilidades');
            $table->string('experiencia');
            $table->string('email');
            $table->string('modalidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publicar_ofertas');
    }
};
