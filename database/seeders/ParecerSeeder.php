<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParecerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parecer')->insert([[
            'parecer' => 'DEVE SER concedido tendo em vista atender à legislação vigente'
        ],[
            'parecer' => 'NÃO DEVE ser concedido tendo em vista não atender à legislação vigente'
        ]]);
    }
}
