<?php

namespace App\Models\Turma;

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
      return $this->belongsTo('App\Models\Turma', 'id', 'turma_id');
  }
}