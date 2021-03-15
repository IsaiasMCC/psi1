<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casillero extends Model
{
    use HasFactory;
    protected $table = 'casilleros';
    protected $fillable = [
        'numero',
        'tiempo',
        'costo',
        'estado_id'
    ];
}

