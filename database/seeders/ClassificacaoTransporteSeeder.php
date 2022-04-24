<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassificacaoTransporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classificacao_transporte')->insert([[
            'descricao' => 'Coletivo Municipal'
        ],[
            'descricao' => 'Intermunicipal Urbano'
        ],[
            'descricao' => 'Transporte Regular Comum'
        ],[
            'descricao' => 'Transporte Regular Semi-Direto'
        ],[
            'descricao' => 'Transporte Regular Direto'
        ]]);
    }
}
