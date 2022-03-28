<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
            Campos: Nome do candidato;
            Data de cadastro; Idiomas;
            Pretensão salarial; CV anexo;
            Localização; Cargo atual;
            Comentários; Status (Ativo, Inativo,
            Blacklisted);
        */
        Schema::create('candidato', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->date('data_cadastro');
            $table->float('salario',10,2)->nullable();
            $table->string('curriculo')->nullable();
            $table->string('address')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->string('cargo_atu')->nullable();
            $table->string('comentarios')->nullable();
            $table->string('email')->unique();            
            $table->string('phone');
            $table->integer('status'); //0- Intativo, 1- Ativo, 2- BlackListed

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidato');
    }
}
