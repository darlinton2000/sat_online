<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostoGradSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posto_grad')->insert([[
            'abrev_posto_grad' => 'Sd Ev',
            'posto_grad' => 'Soldado Efetivo Variável',
            'soldo' => 956.00,
            'cota_parte' => 47.43
        ],[
            'abrev_posto_grad' => 'Sd EP',
            'posto_grad' => 'Soldado Efetivo Profissional',
            'soldo' => 1856.00,
            'cota_parte' => 77.66
        ],[
            'abrev_posto_grad' => 'Cb',
            'posto_grad' => 'Cabo',
            'soldo' => 2627.00,
            'cota_parte' => 115.59
        ],[
            'abrev_posto_grad' => '3º Sgt',
            'posto_grad' => '3º Sargento',
            'soldo' => 3825.00,
            'cota_parte' => 168.30
        ],[
            'abrev_posto_grad' => '2º Sgt',
            'posto_grad' => '2º Sargento',
            'soldo' => 4770.00,
            'cota_parte' => 209.88
        ],[
            'abrev_posto_grad' => '1º Sgt',
            'posto_grad' => '1º Sargento',
            'soldo' => 5483.00,
            'cota_parte' => 241.25
        ],[
            'abrev_posto_grad' => 'S Ten',
            'posto_grad' => 'Sub Tenente',
            'soldo' => 6169.00,
            'cota_parte' => 271.44
        ],[
            'abrev_posto_grad' => 'Asp',
            'posto_grad' => 'Aspirante',
            'soldo' => 6993.00,
            'cota_parte' => 321.86
        ],[
            'abrev_posto_grad' => '2º Ten',
            'posto_grad' => '2º Tenente',
            'soldo' => 7490.00,
            'cota_parte' => 329.56
        ],[
            'abrev_posto_grad' => '1º Ten',
            'posto_grad' => '1º Tenente',
            'soldo' => 8245.00,
            'cota_parte' => 362.78
        ],[
            'abrev_posto_grad' => 'Cap',
            'posto_grad' => 'Capitão',
            'soldo' => 9135.00,
            'cota_parte' => 362.78
        ],[
            'abrev_posto_grad' => 'Maj',
            'posto_grad' => 'Major',
            'soldo' => 11088.00,
            'cota_parte' => 362.78
        ],[
            'abrev_posto_grad' => 'Ten Cel',
            'posto_grad' => 'Tenente Coronel',
            'soldo' => 11250.00,
            'cota_parte' => 362.78
        ],[
            'abrev_posto_grad' => 'Cel',
            'posto_grad' => 'Coronel',
            'soldo' => 11451.00,
            'cota_parte' => 362.78
        ]]);
    }
}
