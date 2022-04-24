<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SituacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('situacao')->insert([[
            'descricao' => 'Ativo'
        ],[
            'descricao' => 'Inativo'
        ]]);
    }
}
