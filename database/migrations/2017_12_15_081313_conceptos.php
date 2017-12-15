<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Conceptos extends Migration
{

    public function up()
    {
        Schema::create('conceptos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('documento');
            $table->string('nombre');
            $table->string('codigo');
            $table->string('detalle');
            $table->string('descripcion');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('conceptos');
    }
}
