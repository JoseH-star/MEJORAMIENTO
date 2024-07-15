<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $primaryKey = 'numero';

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_codigo');
    }

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'proyecto_codigo');
    }

    public function tipo()
    {
        return $this->belongsTo(TipoPago::class, 'tipo_codigo');
    }
}
