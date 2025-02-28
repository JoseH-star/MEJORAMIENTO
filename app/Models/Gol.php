<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gol extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'codigo';

    public function jugador()
    {
        return $this->belongsTo(Jugador::class, 'jugador_codigo');
    }
}
