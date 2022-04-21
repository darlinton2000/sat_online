<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NivelAcessoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nivel_acesso')->insert([
            'descricao' => 'Usuario',
        ],[
            'descricao' => 'Furriel',
        ],[
            'descricao' => 'Cmt Cia',
        ],[
            'descricao' => 'Administrador',
        ]);
    }
}
