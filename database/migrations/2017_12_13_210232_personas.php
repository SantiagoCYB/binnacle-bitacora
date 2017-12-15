<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Personas extends Migration
{

    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('documento');
            $table->string('apellidos');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('genero');
            $table->boolean('condicion');
        });
    }


    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
