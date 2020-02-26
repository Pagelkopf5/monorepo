<?php

use Illuminate\Database\Seeder;

class TurmaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('turma')->insert([
            'nome' => 'Turma Abelhinha',
            'serie' => '1º serie',
            'curso' => 'Curso de informatica',
        ]);
        DB::table('turma')->insert([
            'nome' => 'Joao Doe',
            'sexo' => 'M',
            'data_nascimento' => '02/12/1997',
        ]);
    }
}
