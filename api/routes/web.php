<?php

use App\Models\Turma;
use App\Models\Aluno;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('turma', 'TurmaController', ['names' => [
    'index' => 'turma.index',
    'create' => 'turma.create',
    'store' => 'turma.store',
    'edit' => 'turma.edit',
    'update' => 'turma.update',
]]);

Route::put('/edit_turma/{id}', function ($id, $request) {
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
})->name('turma.editar');

Route::get('/delete_turma/{id}', function ($id) {
    $turma = Turma::findOrFail($id);
    $turma->delete();

    return redirect()->route('turma.index');
})->name('turma.delete');


Route::resource('aluno', 'AlunoController', ['names' => [
    'index' => 'aluno.index',
    'create' => 'aluno.create',
    'store' => 'aluno.store',
    'edit' => 'aluno.edit',
    'update' => 'aluno.update',
]]);

Route::get('/delete_aluno/{id}', function ($id) {
    $aluno = Aluno::findOrFail($id);
    $aluno->delete();

    return redirect()->route('aluno.index');
})->name('aluno.delete');
