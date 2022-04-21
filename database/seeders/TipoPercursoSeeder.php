<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoPercursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_percurso')->insert([
            'descricao' => 'Percurso de Ida'
        ],[
            'descricao' => 'Percurso de Volta'
        ]);
    }
}
