<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrevistaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
            Lista de candidatos: nome do
            candidato; localização; vaga (se
            aplicável); data/hora entrevista
            (BRT); Anexar CV; Recrutador;
            Notas;
        */
        Schema::create('entrevista', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('candidato_id')->unsigned();
            $table->integer('idioma_id')->unsigned();
            $table->integer('recrutador_id')->unsigned();
            $table->foreign('candidato_id')->references('id')->on('candidato');
            $table->foreign('idioma_id')->references('id')->on('vagas')->nullable();
            $table->dateTime('dt_hr_entrevista')->nullable(); //BRT
            $table->foreign('recrutador_id')->references('id')->on('users');
            $table->string('notas')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrevista');
    }
}
