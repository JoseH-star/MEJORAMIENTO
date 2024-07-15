<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('jugadores', function (Blueprint $table) {
            $table->id('codigo');
            $table->string('nombre');
            $table->string('posicion');
            $table->date('fecha_Nac');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('jugadores');
    }
};
