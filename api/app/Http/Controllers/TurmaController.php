<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain\Contato\Contato;

class TurmaController extends Controller
{
  public function index()
  {
    return view('turma/index');
  }

  public function create()
  {
    return view('turma/create');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
        'nome_vendedor' => 'required',
        'nome_contato'  => 'required',
        'email'         => 'required',
        'telefone'      => 'required',
    ]);

    $turma        = new Contato;
    $turma->nome  = $request->nome;
    $turma->serie = $request->serie;
    $turma->curso = $request->curso;
    $turma->save();

    return route('turma/index');
  }
  
  public function show($id)
  {
      //
  }

  public function edit($id)
  {
    $contato = Contato::find($id);

    return view('create')->with('contato', $contato);
  }

  public function update(Request $request, $id)
  {
    $this->validate($request, [
      'nome_vendedor' => 'required',
      'nome_contato'  => 'required',
      'email'         => 'required',
      'telefone'      => 'required',
    ]);

    $turma        = new Contato;
    $turma->nome  = $request->nome;
    $turma->serie = $request->serie;
    $turma->curso = $request->curso;
    $turma->save();

    return route('index');
  }

  public function destroy($id)
  {
      $turma = Turma::findOrFail($id);
      $turma->delete();

      return route('index');
  }
}