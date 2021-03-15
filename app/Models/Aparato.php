<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aparato extends Model
{
    use HasFactory;
    
    protected $table = 'aparatos';
    protected $fillable = [
        'nombre',
        'marca',
        'modelo',
        'estado_id',
        'sala_id'
    ]; 
}
