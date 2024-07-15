<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigo';

    public function goles()
    {
        return $this->hasMany(Gol::class, 'jugador_codigo');
    }

    public function equipo()
    {
        return $this->belongsToMany(Equipo::class, 'juega', 'jugador_codigo', 'equipo_codigo');
    }
}
