<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaginasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paginas', function (Blueprint $table) {
            $table->bigIncrements('idpagina');
            $table->string('titulo');
            $table->string('subtitulo')->nullable();
            $table->string('slug');
            $table->string('img')->nullable();
            $table->text('conteudo');
            $table->bigInteger('idpaginacategoria')->unsigned()->nullable();
            $table->foreign('idpaginacategoria')->references('idpaginacategoria')->on('pagina_categorias');
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
        Schema::dropIfExists('paginas');
    }
}
