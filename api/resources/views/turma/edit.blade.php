@extends('layouts.app')

@section('title', 'Turmas')

@section('content')

  <h1>TURMAS</h1>
  <div>
    <form method="PUT" action="{{ route('turma.update', $turma->id) }}">
      {{ csrf_field() }}
      <div>
        <label>nome</label>
      <input type="text" name="nome" required value="{{$turma->nome}}">
      </div>
      <div>
        <label>serie</label>
        <input type="text" name="serie" required value="{{$turma->serie}}">
      </div>
      <div>
        <label>curso</label>
        <input type="text" name="curso" required value="{{$turma->curso}}">
      </div>
      <button>salvar</button>
    </form>
  </div>
@endsection