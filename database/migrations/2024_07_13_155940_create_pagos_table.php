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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id('numero');
            $table->decimal('cantidad', 8, 2);
            $table->string('concepto');
            $table->date('fecha_pago');
            $table->foreignId('cliente_codigo')->constrained('clientes');
            $table->foreignId('proyecto_codigo')->constrained('proyectos');
            $table->foreignId('tipo_codigo')->constrained('tipo_pagos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
