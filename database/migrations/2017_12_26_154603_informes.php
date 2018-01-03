<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Informes extends Migration
{

    public function up()
    {
        Schema::create('informes', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('persona_id')->index();
            $table->Integer('concepto_id')->index();
			$table->string('descripcion');
			$table->timestamps();
			$table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('informes');
    }
}
