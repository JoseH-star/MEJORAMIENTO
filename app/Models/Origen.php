<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Origen extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigo';

    public function viajes()
    {
        return $this->belongsToMany(Viaje::class, 'viaje_origen', 'origen_codigo', 'viaje_codigo');
    }
}
