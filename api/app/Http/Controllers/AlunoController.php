<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain\Contato\Contato;

class AlunoController extends Controller
{
  public function index()
  {
    return view('aluno/index');
  }

  public function create()
  {
    return view('aluno/create');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
        'nome'            => 'required',
        'sexo'            => 'required',
        'data_nascimento' => 'required',
        'turma_id'        => 'required',
    ]);

    $aluno        = new Contato;
    $aluno->nome            = $request->nome;
    $aluno->sexo            = $request->sexo;
    $aluno->data_nascimento = $request->data_nascimento;
    $aluno->turma_id        = $request->turma;
    $aluno->save();

    return route('aluno/index');
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
        'nome'            => 'required',
        'sexo'            => 'required',
        'data_nascimento' => 'required',
        'turma_id'        => 'required',
    ]);

    $aluno        = new Contato;
    $aluno->nome            = $request->nome;
    $aluno->sexo            = $request->sexo;
    $aluno->data_nascimento = $request->data_nascimento;
    $aluno->turma_id        = $request->turma;
    $aluno->save();

    return route('index');
  }

  public function destroy($id)
  {
      $turma = Turma::findOrFail($id);
      $turma->delete();

      return route('index');
  }
}