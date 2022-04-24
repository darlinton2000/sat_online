<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubunidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subunidade')->insert([[
            'nome' => 'Companhia de Polícia do Exército',
            'abreviacao' => 'Cia PE'
        ],[
            'nome' => 'Companhia de Guardas',
            'abreviacao' => 'Cia Gda'
        ],[
            'nome' => 'Companhia de Serviço',
            'abreviacao' => 'Cia Sv'
        ],[
            'nome' => 'Companhia de Comando',
            'abreviacao' => 'Cia Cmdo'
        ],[
            'nome' => 'Companhia de Fuzileiros',
            'abreviacao' => 'Cia Fuz'
        ],[
            'nome' => 'Banda de Música',
            'abreviacao' => 'B Mus'
        ],[
            'nome' => '1ª Companhia Auxiliar do Corpo de Cadetes',
            'abreviacao' => '1ª Cia Aux'
        ],[
            'nome' => '2ª Companhia Auxiliar do Corpo de Cadetes',
            'abreviacao' => '2ª Cia Aux'
        ]]);
    }
}
