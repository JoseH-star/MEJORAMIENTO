<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPago extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigo';

    public function pagos()
    {
        return $this->hasMany(Pago::class, 'tipo_codigo');
    }
}
