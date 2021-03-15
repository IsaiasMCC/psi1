<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoletaInscripcion extends Model
{
    use HasFactory;

    protected $table = 'boletas_de_inscripciones';

    protected $fillable = [
        'fecha_inscripcion',
        'fecha_inicio',
        'fecha_fin',
        'importe',
        'total',
        'descuento_id',
        'cliente_id',
        'administrador_id'
    ];

}
