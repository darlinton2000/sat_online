<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostoGradTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posto_grad', function (Blueprint $table) {
            $table->id();
            $table->string('abrev_posto_grad');
            $table->string('posto_grad');
            $table->decimal('soldo', 10, 2);
            $table->decimal('cota_parte', 10, 2);
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
        Schema::dropIfExists('posto_grad');
    }
}
