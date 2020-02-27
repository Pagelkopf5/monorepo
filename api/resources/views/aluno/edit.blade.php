@extends('layouts.app')

@section('title', 'Alunos')

@section('content')

  <h1>ALUNOS</h1>
  <div>
    <form method="PUT" action="{{ route('aluno.update', $aluno->id) }}">
      {{ csrf_field() }}
      <div>
        <label>nome</label>
      <input type="text" name="nome" required value="{{$aluno->nome}}">
      </div>
      <div>
        <label>serie</label>
        <input type="text" name="serie" required value="{{$aluno->sexo}}">
      </div>
      <div>
        <label>curso</label>
        <input type="text" name="curso" required value="{{$aluno->data_nascimento}}">
      </div>
      <div>
        <label>turma</label>
        <select name="turma_id">
          @foreach ($turmas as $turma)
            @if ($turma->id == $aluno->turma->id)
            <option value="{{$turma->id}}" selected>{{$turma->nome}}</option>
            @else
            <option value="{{$turma->id}}">{{$turma->nome}}</option>
            @endif
          @endforeach
        </select>
      </div>
      <button>salvar</button>
    </form>
  </div>
@endsection