<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('presidentes', function (Blueprint $table) {
            $table->id('dni');
            $table->string('nombre');
            $table->string('apellidos');
            $table->date('fecha_nac');
            $table->foreignId('equipo_codigo')->constrained('equipos');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('presidentes');
    }
};
