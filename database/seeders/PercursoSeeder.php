<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PercursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('percurso')->insert([[
            'descricao' => 'Residência-Trabalho',
            'tipo_percurso_id' => 1
        ],[
            'descricao' => 'Residência-Trecho 1-Trabalho',
            'tipo_percurso_id' => 1
        ],[
            'descricao' => 'Residência-Trecho 1-Trecho2-Trabalho',
            'tipo_percurso_id' => 1
        ],[
            'descricao' => 'Residência-Trecho 1-Trecho2-Trecho 3-Trabalho',
            'tipo_percurso_id' => 1
        ],[
            'descricao' => 'Residência-Trecho 1-Trecho2-Trecho 3-Trecho 4-Trabalho',
            'tipo_percurso_id' => 1
        ],[
            'descricao' => 'Trabalho-Residência',
            'tipo_percurso_id' => 2
        ],[
            'descricao' => 'Trabalho-Trecho 1-Residência',
            'tipo_percurso_id' => 2
        ],[
            'descricao' => 'Trabalho-Trecho 1-Trecho2-Residência',
            'tipo_percurso_id' => 2
        ],[
            'descricao' => 'Trabalho-Trecho 1-Trecho2-Trecho 3-Residência',
            'tipo_percurso_id' => 2
        ],[
            'descricao' => 'Trabalho-Trecho 1-Trecho2-Trecho 3-Trecho 4-Residência',
            'tipo_percurso_id' => 2
        ]]);
    }
}
