<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstructorDisciplina extends Model
{
    use HasFactory;

    protected $table = 'instructordisciplinas';

    protected $fillable = [
        'instructor_id',
        'disciplina_id'
    ];
}
