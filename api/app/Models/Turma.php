<?php

namespace App\Models\Turma;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $fillable = [
        'nome',
        'serie',
        'curso',
    ];

    protected $table = 'turma';

    public $timestamps = false;
}