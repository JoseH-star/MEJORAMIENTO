<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigo';

    public function clientes()
    {
        return $this->belongsToMany(Cliente::class, 'cliente_proyecto', 'proyecto_codigo', 'cliente_codigo');
    }

    public function colaboradors()
    {
        return $this->belongsToMany(Colaborador::class, 'colaborador_proyecto', 'proyecto_codigo', 'colaborador_nif');
    }

    public function pagos()
    {
        return $this->hasMany(Pago::class, 'proyecto_codigo');
    }
}
