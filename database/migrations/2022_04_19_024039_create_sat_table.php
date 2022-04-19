<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('beneficiario')->constrained('users', 'id');
            $table->boolean('primeira_solicitacao');
            $table->integer('nr_nova_solicitacao');
            $table->foreignId('motivo_solicitacao')->nullable()->constrained('motivo_solicitacao', 'id');
            $table->foreignId('percurso_ida_id')->constrained('percurso');
            $table->foreignId('percurso_volta_id')->constrained('percurso');
            $table->foreignId('classificacao_transporte_id')->constrained('classificacao_transporte');
            $table->foreignId('local_circulacao_id')->constrained('local_circulacao');
            $table->foreignId('furriel_id')->nullable()->constrained('users');
            $table->decimal('valor_mensal', 10, 2);
            $table->decimal('valor_cota_parte', 10, 2);
            $table->decimal('valor_aux_transp', 10, 2);
            $table->foreignId('parecer_id')->nullable()->constrained('parecer');
            $table->foreignId('cmt_cia_id')->nullable()->constrained('users');
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
        Schema::dropIfExists('sat');
    }
}
