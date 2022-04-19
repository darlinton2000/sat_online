<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cpf')->unique();
            $table->string('prec_cp')->unique()->nullable();
            $table->string('idt_militar')->unique()->nullable();
            $table->foreignId('posto_grad_id')->constrained('posto_grad');
            $table->foreignId('companhia_id')->constrained('companhia');
            $table->foreignId('setor_id')->constrained('setor');
            $table->foreignId('om_id')->constrained('om');
            $table->foreignId('nivel_acesso_id')->constrained('nivel_acesso')->default(1);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
