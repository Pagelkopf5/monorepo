@extends('layouts.app')

@section('title', 'Turmas')

@section('content')
  <h1>TURMAS</h1>
  <div>
    @foreach ($turmas as $turma)
    <div>
      <span>{{$turma->nome}}</span>
    </div>
    <div>
      <span>{{$turma->serie}}</span>
    </div>
    <div>
      <span>{{$turma->curso}}</span>
    </div>
    <div>
      <a href="{{route('turma.edit', $turma->id)}}">edit</a>
      <a href="{{route('turma.delete', $turma->id)}}">delete</a>
    </div>
    @endforeach
  </div>
  <a href="{{route("turma.create")}}">Nova</a>

@endsection