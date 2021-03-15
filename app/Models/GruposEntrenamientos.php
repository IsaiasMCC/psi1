<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GruposEntrenamientos extends Model
{
    use HasFactory;

    protected $table = 'grupos_de_entrenamientos';
    protected $fillable = [
        'nombre',
        'cupo',
        'instructor_id',
        'disciplina_id',
    ];

}
