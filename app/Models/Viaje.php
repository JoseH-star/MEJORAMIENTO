<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigo';

    public function viajeros()
    {
        return $this->belongsToMany(Viajero::class, 'viaje_viajero', 'viaje_codigo', 'viajero_dni');
    }

    public function destinos()
    {
        return $this->belongsToMany(Destino::class, 'viaje_destino', 'viaje_codigo', 'destino_codigo');
    }

    public function origens()
    {
        return $this->belongsToMany(Origen::class, 'viaje_origen', 'viaje_codigo', 'origen_codigo');
    }
}
