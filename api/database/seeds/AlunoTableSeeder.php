<?php

use Illuminate\Database\Seeder;

class AlunoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aluno')->insert([
            'nome' => 'John Doe',
            'sexo' => 'M',
            'data_nascimento' => '12/02/1997',
            'turma_id' => 1,
        ]);
        DB::table('aluno')->insert([
            'nome' => 'Joao Doe',
            'sexo' => 'M',
            'data_nascimento' => '02/12/1997',
            'turma_id' => 1,
        ]);
    }
}
