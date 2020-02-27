@extends('layouts.app')

@section('title', 'Alunos')

@section('content')
  <h1>ALUNOS</h1>
  <div>
    <form method="post" action="{{ route('aluno.store') }}">
      {{ csrf_field() }}
      <div>
        <label>nome</label>
        <input type="text" name="nome" required>
      </div>
      <div>
        <label>sexo</label>
        <input type="text" name="sexo" required>
      </div>
      <div>
        <label>data de nascimento</label>
        <input type="text" name="data_nascimento" required>
      </div>
      <div>
        <label>turma</label>
        <select name="turma_id">
          @foreach ($turmas as $turma)
          <option value="{{$turma->id}}">{{$turma->nome}}</option>
          @endforeach
        </select>
      </div>
      <button>salvar</button>
    </form>
  </div>
@endsection