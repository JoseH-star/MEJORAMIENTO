<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;

    protected $primaryKey = 'nif';

    public function proyectos()
    {
        return $this->belongsToMany(Proyecto::class, 'colaborador_proyecto', 'colaborador_nif', 'proyecto_codigo');
    }
}
