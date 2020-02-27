@extends('layouts.app')

@section('title', 'Turmas')

@section('content')
  <a href="{{route('turma.index')}}"><h1>TURMAS</h1></a>
  <a href="{{route('aluno.index')}}"><h1>ALUNOS</h1></a>
  
@endsection