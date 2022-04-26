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
            $table->foreignId('posto_grad_id')->nullable()->constrained('posto_grad');
            $table->foreignId('subunidade_id')->nullable()->constrained('subunidade');
            $table->foreignId('setor_id')->nullable()->constrained('setor');
            $table->foreignId('om_id')->nullable()->constrained('om');
            $table->foreignId('nivel_acesso_id')->default(1)->nullable()->constrained('nivel_acesso');
            $table->string('email')->unique()->nullable();
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
