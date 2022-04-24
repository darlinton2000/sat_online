<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('om')->insert([[
            'nome' => 'Academia Militar das Agulhas Negras',
            'abrev' => 'AMAN'
        ],[
            'nome' => 'Batalhão de Comando e Serviços',
            'abrev' => 'BCSv/AMAN'
        ]]);
    }
}
