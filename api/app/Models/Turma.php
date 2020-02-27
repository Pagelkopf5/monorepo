<?php

namespace App\Models;

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

    public function alunos(){
        return $this->hasMany('App\Models\Aluno', 'turma', 'id');
    }
}