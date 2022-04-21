<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinhaOnibusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('linha_onibus')->insert([
            'nome' => '105-Liberdade/Vicentina'
        ],[
            'nome' => '125-Jd. Primavera/Cooperativa'
        ],[
            'nome' => '130-C. Alegria/Cooperativa'
        ],[
            'nome' => '135-Primavera/Rodoviária'
        ],[
            'nome' => '140-Campos Elíseos/B. Olaria'
        ],[
            'nome' => '145-Rodoviária/Fazenda Barra II'
        ]);
    }
}
