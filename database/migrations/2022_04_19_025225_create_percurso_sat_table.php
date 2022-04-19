<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePercursoSatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('percurso_sat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sat_id')->constrained('sat');
            $table->string('percurso');
            $table->foreignId('empresa_onibus_id')->constrained('empresa_onibus');
            $table->foreignId('linha_onibus_id')->constrained('linha_onibus');
            $table->decimal('valor', 8, 2);
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
        Schema::dropIfExists('percurso_sat');
    }
}
