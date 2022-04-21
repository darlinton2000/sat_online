<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PostoGradSeeder::class,
            ClassificacaoTransporteSeeder::class,
            EmpresaOnibusSeeder::class,
            LinhaOnibusSeeder::class,
            LocalCirculacaoSeeder::class,
            MotivoSolicitacaoSeeder::class,
            NivelAcessoSeeder::class,
            OmSeeder::class,
            ParecerSeeder::class,
            PercursoSeeder::class,
            SetorSeeder::class,
            SituacaoSeeder::class,
            SubunidadeSeeder::class,
            TipoPercursoSeeder::class,
            ValorSeeder::class
        ]);
    }
}
