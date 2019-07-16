<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projectos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('orden');
            $table->string('nombre');
            $table->string('actividad');
            $table->string('inicio');
            $table->string('fin');
            $table->string('contador');
            $table->string('tiempo');
            $table->string('fecha');
            $table->string('terminado');
            $table->string('comentarios');
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
        Schema::dropIfExists('projectos');
    }
}
