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
            //$table->Integer('persona_id')->index();
            $table->string('codigo')->unique();
            $table->string('nombre');
            $table->string('descripcion');
        });
    }


    public function down()
    {
        Schema::dropIfExists('conceptos');
    }
}
