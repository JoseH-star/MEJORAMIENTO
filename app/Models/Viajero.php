<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viajero extends Model
{
    use HasFactory;

    protected $primaryKey = 'dni';

    public function viajes()
    {
        return $this->belongsToMany(Viaje::class, 'viaje_viajero', 'viajero_dni', 'viaje_codigo');
    }
}
