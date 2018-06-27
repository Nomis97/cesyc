<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaInvestigaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('investigaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUsuario')->unsigned();
            $table->index('idUsuario');
            $table->foreign('idUsuario') ->references('id')->on('users') ->onDelete('cascade');  //llave foranea
            $table->string('titulo',150);
            $table->string('integrantes',100);
            $table->string('descripcion',150);
            $table->string('objetivo',150);
            $table->string('estado',20);
            $table->date('fecha');
            $table->string('lugar',20);
            $table->string('financiamiento',50);
            $table->string('pclave',100);
            $table->string('ruta',150);
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
        Schema::drop('investigaciones');
    }
}
