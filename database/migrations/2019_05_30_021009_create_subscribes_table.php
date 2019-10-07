<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscribesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome_completo');
            $table->date('data_nascimento');
            $table->string('cep');
            $table->string('logradouro');
            $table->string('numero');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('uf');
            $table->string('celular');
            $table->string('email');

            $table->string('doador')->default('N');
            $table->string('tp_sang')->nullable();
            $table->string('trabalha')->nullable();
            $table->string('cargo')->nullable();
            $table->string('escolaridade');
            $table->string('curso')->nullable();
            $table->string('filhos')->default('N');
            $table->string('est_civil');
            $table->string('blusa');
            $table->string('outro_projeto')->nullable();
            $table->dateTime('accepted_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscribes');
    }
}
