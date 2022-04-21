<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresaOnibusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresa_onibus')->insert([
            'descricao' => 'Auto Comercial Barra Mansa'
        ],[
            'descricao' => 'Bem-Te-Vi Transporte Ltda'
        ],[
            'descricao' => 'Colitur Transporte Rodoviário Ltda'
        ],[
            'descricao' => 'Empresa de Ônibus Pedro Antônio'
        ],[
            'descricao' => 'Expresso Itatiaia Ltda'
        ],[
            'descricao' => 'Evanil Transportes Ltda'
        ],[
            'descricao' => 'Gran Eufrásia Turística Ltda'
        ],[
            'descricao' => 'Porto Real Transporte Coletivo Ltda'
        ]);
    }
}
