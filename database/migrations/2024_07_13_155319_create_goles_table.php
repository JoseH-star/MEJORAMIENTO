<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('goles', function (Blueprint $table) {
            $table->id('codigo');
            $table->string('minuto');
            $table->string('desc');
            $table->foreignId('jugador-codigo')->constrained('jugadores');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('goles');
    }
};
