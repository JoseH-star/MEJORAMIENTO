<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigo';

    public function viajes()
    {
        return $this->belongsToMany(Viaje::class, 'viaje_destino', 'destino_codigo', 'viaje_codigo');
    }
}
