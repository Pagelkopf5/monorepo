@extends('layouts.app')

@section('title', 'Turmas')

@section('content')
  <h1>Alunos</h1>
  <div>
    @foreach ($alunos as $aluno)
    <div>
      <span>{{$aluno->nome}}</span>
    </div>
    <div>
      <span>{{$aluno->sexo}}</span>
    </div>
    <div>
      <span>{{$aluno->data_nascimento}}</span>
    </div>
    <div>
      <span>{{$aluno->turma->nome}}</span>
    </div>
    <div>
      <a href="{{route('aluno.edit', $aluno->id)}}">edit</a>
      <a href="{{route('aluno.delete', $aluno->id)}}">delete</a>
    </div>
    @endforeach
  </div>
  <a href="{{route("aluno.create")}}">Nova</a>

@endsection