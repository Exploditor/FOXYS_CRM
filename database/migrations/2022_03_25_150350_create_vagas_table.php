<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
            Titulo da vaga; Data de
            abertura; Cliente; Contato do
            cliente; Localização; Descrição da
            vaga; Salário; Requisitos; Idiomas;
            Key-words; Recrutador
            responsável; Comercial
            responsável; Numero de vagas;
            Status (Ativo, On-Hold, Cancelada,
            Encerrada);
        */
        Schema::create('vagas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->date('data_abertura');
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('cliente');
            $table->string('address')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->boolean('home_office');
            $table->boolean('ativo');
            $table->string('description');
            $table->float('salario',10,2);
            $table->string('requisitos');
            $table->integer('recrutador_id')->unsigned();
            $table->integer('comercial_id')->unsigned();
            $table->foreign('recrutador_id')->references('id')->on('users');
            $table->foreign('comercial_id')->references('id')->on('users');
            $table->integer('quantia');
            $table->integer('status'); //1 Ativo, 2 On-Hold, 3 Cancelada, 0 Encerrada
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vagas');
    }
}
