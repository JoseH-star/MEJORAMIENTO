<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigo';

    public function equipos()
    {
        return $this->belongsToMany(Equipo::class, 'juega', 'partido_codigo', 'equipo_codigo');
    }
}
