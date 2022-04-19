<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaOnibusSatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_onibus_sat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sat_id')->constrained('sat');
            $table->foreignId('empresa_onibus_id')->constrained('empresa_onibus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresa_onibus_sat');
    }
}
