<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'codigo';

    public function jugadores()
    {
        return $this->belongsToMany(Jugador::class, 'juega', 'equipo_codigo', 'jugador_codigo');
    }

    public function presidente()
    {
        return $this->hasOne(Presidente::class, 'equipo_codigo');
    }

    public function partidos()
    {
        return $this->belongsToMany(Partido::class, 'juega', 'equipo_codigo', 'partido_codigo');
    }
}
