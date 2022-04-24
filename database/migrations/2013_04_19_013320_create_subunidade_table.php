<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubunidadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subunidade', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('abreviacao');
            $table->foreignId('cmt_cia')->nullable()->constrained('users', 'id');
            $table->foreignId('furriel')->nullable()->constrained('users', 'id');
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
        Schema::dropIfExists('subunidade');
    }
}
