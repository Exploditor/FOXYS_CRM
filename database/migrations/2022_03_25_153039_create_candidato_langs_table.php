<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatoLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidato_langs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('candidato_id')->unsigned();
            $table->integer('idioma_id')->unsigned();
            $table->foreign('candidato_id')->references('id')->on('candidato');
            $table->foreign('idioma_id')->references('id')->on('idiomas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidato_langs');
    }
}
