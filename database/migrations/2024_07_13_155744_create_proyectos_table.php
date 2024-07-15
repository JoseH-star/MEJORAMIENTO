<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id('codigo');
            $table->string('descripcion');
            $table->date('fecha_fin');
            $table->date('fecha_inicio');
            $table->decimal('cuantia', 8, 2);
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
