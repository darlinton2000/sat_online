<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SetorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setor')->insert([[
            'nome' => 'Companhia de Polícia do Exército',
            'abrev' => 'Cia PE'
        ],[
            'nome' => 'Companhia de Guardas',
            'abrev' => 'Cia Gda'
        ],[
            'nome' => 'Companhia de Serviço',
            'abrev' => 'Cia Sv'
        ],[
            'nome' => 'Companhia de Comando',
            'abrev' => 'Cia Cmdo'
        ],[
            'nome' => 'Companhia de Fuzileiros',
            'abrev' => 'Cia Fuz'
        ],[
            'nome' => 'Banda de Música',
            'abrev' => 'B Mus'
        ],[
            'nome' => '1ª Companhia Auxiliar do Corpo de Cadetes',
            'abrev' => '1ª Cia Aux'
        ],[
            'nome' => '2ª Companhia Auxiliar do Corpo de Cadetes',
            'abrev' => '2ª Cia Aux'
        ],[
            'nome' => 'Curso de Infantaria',
            'abrev' => 'C Inf'
        ],[
            'nome' => 'Curso de Cavalaria',
            'abrev' => 'C Cav'
        ],[
            'nome' => 'Curso de Artilharia',
            'abrev' => 'C Art'
        ],[
            'nome' => 'Curso de Engenharia',
            'abrev' => 'C Eng'
        ],[
            'nome' => 'Curso de Comunicações',
            'abrev' => 'C Com'
        ],[
            'nome' => 'Curso de Intendência',
            'abrev' => 'C Int'
        ],[
            'nome' => 'Curso de Material Bélico',
            'abrev' => 'C MB'
        ],[
            'nome' => 'Prefeitura Militar',
            'abrev' => 'Pref Mil'
        ],[
            'nome' => 'Simulador de Apoio de Fogo',
            'abrev' => 'SIMAF'
        ],[
            'nome' => 'Corpo Administrativo',
            'abrev' => 'C Adm'
        ],[
            'nome' => 'Divisão de Ensino',
            'abrev' => 'Div Ens'
        ],[
            'nome' => 'Divisão Administrativa',
            'abrev' => 'Div Adm'
        ]]);
    }
}
