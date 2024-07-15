<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presidente extends Model
{
    use HasFactory;

    protected $primaryKey = 'dni';

    public function equipo()
    {
        return $this->belongsTo(Equipo::class, 'equipo_codigo');
    }
}
