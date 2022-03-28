<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdiomasVagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idiomas_vagas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('requisitos');
            $table->integer('vaga_id')->unsigned();
            $table->integer('idioma_id')->unsigned();
            $table->foreign('idioma_id')->references('id')->on('idiomas');
            $table->foreign('vaga_id')->references('id')->on('vagas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('idiomas_vagas');
    }
}
