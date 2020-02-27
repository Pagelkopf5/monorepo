<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Turma;

class AlunoController extends Controller
{
  public function index()
  {
    $aluno = Aluno::all();

    return view('aluno/index')->with('alunos', $aluno);
  }

  public function create()
  {
    $turma = Turma::all();

    return view('aluno/create')->with('turmas', $turma);
  }

  public function store(Request $request)
  {
    dump('caiu');
    $this->validate($request, [
        'nome'            => 'required',
        'sexo'            => 'required',
        'data_nascimento' => 'required',
        'turma_id'        => 'required',
    ]);

    $aluno                  = new Aluno;
    $aluno->nome            = $request->nome;
    $aluno->sexo            = $request->sexo;
    $aluno->data_nascimento = $request->data_nascimento;
    $aluno->turma_id        = $request->turma_id;
    $aluno->save();

    return redirect()->route('aluno.index');
  }
  
  public function show($id)
  {
      //
  }

  public function edit($id)
  {
    $aluno = Aluno::find($id);
    $turma = Turma::all();

    return view('aluno/edit', [
      'aluno' => $aluno, 
      'turmas' => $turma,
    ]);
  }

  public function update(Request $request, $id)
  {
    $this->validate($request, [
        'nome'            => 'required',
        'sexo'            => 'required',
        'data_nascimento' => 'required',
        'turma_id'        => 'required',
    ]);

    $aluno                  = new Aluno;
    $aluno->nome            = $request->nome;
    $aluno->sexo            = $request->sexo;
    $aluno->data_nascimento = $request->data_nascimento;
    $aluno->turma_id        = $request->turma;
    $aluno->save();

    return redirect()->route('aluno.index');
  }

  public function destroy($id)
  {
      $turma = Turma::findOrFail($id);
      $turma->delete();

      return route('index');
  }
}