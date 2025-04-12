<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('email')->unique();
        $table->string('contraseña');
        $table->enum('rol', ['empleador', 'trabajador']);
        $table->string('telefono')->nullable();
        $table->string('direccion')->nullable();


            $table->timestamps();
        });

        Schema::create('
tokens_restablecimiento_contraseña', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('creado_en')->nullable();
        });


        Schema::create('cuentas', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('id_usuario')->nullable()->index();
            $table->string('direccion_ip', 45)->nullable();
            $table->text('agente_usuario')->nullable();
            $table->longText('carga');
            $table->integer('ultima_actividad')->index();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('usuarios');
        Schema::dropIfExists('restablecimiento_contraseña');
        Schema::dropIfExists('cuentas');
    }
};
