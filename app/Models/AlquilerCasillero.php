<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlquilerCasillero extends Model
{
    use HasFactory;

    protected $table = 'alquiler_casilleros';

    protected $fillable = [
        'fecha',
        'cantidad',
        'importe',
        'total',
        'casillero_id',
        'cliente_id',
        'administrador_id'
    ];
}
