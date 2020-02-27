@extends('layouts.app')

@section('title', 'Turmas')

@section('content')
  <h1>TURMAS</h1>
  <div>
    <form method="post" action="{{ route('turma.store') }}">
      {{ csrf_field() }}
      <div>
        <label>nome</label>
        <input type="text" name="nome" required>
      </div>
      <div>
        <label>serie</label>
        <input type="text" name="serie" required>
      </div>
      <div>
        <label>curso</label>
        <input type="text" name="curso" required>
      </div>
      <button>salvar</button>
    </form>
  </div>
@endsection