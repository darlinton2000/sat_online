<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalCirculacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('local_circulacao')->insert([
            'descricao' => 'Dentro de Resende x AMAN'
        ],[
            'descricao' => 'De Cidade A x Rod. Resende x AMAN'
        ],[
            'descricao' => 'De Cidade A x Cidade B x Rod. Resende x AMAN'
        ],[
            'descricao' => 'De Cidade A x Cidade B x Cidade C x Rod. Resende x AMAN'
        ]);
    }
}
