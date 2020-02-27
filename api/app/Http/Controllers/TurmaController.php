<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;

class TurmaController extends Controller
{
  public function index()
  {
    $turma = Turma::all();

    return view('turma/index')->with('turmas', $turma);
    // return ['turmas' => $turma];
  }

  public function create()
  {
    return view('turma/create');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'nome'  => 'required',
      'serie' => 'required',
      'curso' => 'required',
    ]);

    $turma        = new Turma;
    $turma->nome  = $request->nome;
    $turma->serie = $request->serie;
    $turma->curso = $request->curso;
    $turma->save();

    return redirect()->route('turma.index');
  }

  public function show()
  {
    //
  }

  public function edit($id)
  {
    $turma = Turma::find($id);

    return view('turma/edit')->with('turma', $turma);
  }

  public function update($id, Request $request)
  {
    $this->validate($request, [
      'nome'  => 'required',
      'serie' => 'required',
      'curso' => 'required',
    ]);

    $turma = Turma::find($id);
    $turma->nome  = $request->nome;
    $turma->serie = $request->serie;
    $turma->curso = $request->curso;
    $turma->save();

    return redirect()->route('turma.index');
  }
}