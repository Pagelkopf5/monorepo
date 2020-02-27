<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
        'nome',
        'sexo',
        'data_nascimento',
        'turma_id',
    ];

    protected $table = 'aluno';

    public $timestamps = false;

    public function turma(){
      return $this->belongsTo('App\Models\Turma', 'turma_id', 'id');
  }
}