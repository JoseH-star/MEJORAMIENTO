<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('partidos', function (Blueprint $table) {
            $table->id('codigo');
            $table->date('fecha');
            $table->integer('goles_casa');
            $table->integer('goles_fuera');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('partidos');
    }
};
