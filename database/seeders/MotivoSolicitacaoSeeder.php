<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MotivoSolicitacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('motivo_solicitacao')->insert([[
            'descricao' => 'Promoção'
        ],[
            'descricao' => 'Endereço'
        ],[
            'descricao' => 'Reajuste'
        ]]);
    }
}
