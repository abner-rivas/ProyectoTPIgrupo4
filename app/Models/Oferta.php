<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;

    protected $fillable = [
        "id_empresa",
        "carreras_solicitadas",
        "cantidad_estudiantes",
        "puesto",
        "salario",
        "descripcion_proyecto",
        "fecha_inicio",
        "fecha_fin",
        "fecha_max_aplicar"
    ];

    protected $casts = [
        'fecha_incio' => 'datetime',
        'fecha_fin' => 'datetime',
        'fecha_max_aplicar' => 'datetime'
    ];

    public $timestamps = false;
}
