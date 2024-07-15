<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigo';

    public function proyectos()
    {
        return $this->belongsToMany(Proyecto::class, 'cliente_proyecto', 'cliente_codigo', 'proyecto_codigo');
    }

    public function pagos()
    {
        return $this->hasMany(Pago::class, 'cliente_codigo');
    }
}
