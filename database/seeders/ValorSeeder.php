<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ValorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('valor')->insert([[
            'valor' => 4.00
        ],[
            'valor' => 4.05
        ],[
            'valor' => 4.10
        ],[
            'valor' => 4.15
        ],[
            'valor' => 4.20
        ],[
            'valor' => 4.25
        ],[
            'valor' => 4.30
        ],[
            'valor' => 4.35
        ],[
            'valor' => 4.40
        ],[
            'valor' => 4.45
        ],[
            'valor' => 4.50
        ],[
            'valor' => 4.55
        ],[
            'valor' => 4.60
        ],[
            'valor' => 5.00
        ],[
            'valor' => 5.05
        ],[
            'valor' => 5.10
        ],[
            'valor' => 5.15
        ],[
            'valor' => 5.20
        ],[
            'valor' => 5.25
        ],[
            'valor' => 5.70
        ],[
            'valor' => 5.90
        ],[
            'valor' => 6.20
        ],[
            'valor' => 7.20
        ],[
            'valor' => 7.45
        ],[
            'valor' => 9.35
        ],[
            'valor' => 9.55
        ],[
            'valor' => 9.75
        ]]);
    }
}
