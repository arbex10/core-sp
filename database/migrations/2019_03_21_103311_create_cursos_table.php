<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->bigIncrements('idcurso');
            $table->string('tipo');
            $table->string('tema');
            $table->string('img')->nullable();
            $table->dateTime('datarealizacao');
            $table->dateTime('datatermino');
            $table->string('endereco');
            $table->integer('nrvagas');
            $table->text('descricao');
            $table->text('resumo');
            $table->string('publicado');
            $table->bigInteger('idregional')->unsigned();
            $table->foreign('idregional')->references('idregional')->on('regionais');
            $table->bigInteger('idusuario')->unsigned();
            $table->foreign('idusuario')->references('idusuario')->on('users');
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
        Schema::dropIfExists('cursos');
    }
}
