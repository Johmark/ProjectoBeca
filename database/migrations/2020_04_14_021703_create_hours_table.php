<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //If the nigration has been previsly executed it drops the table
        Schema::dropIfExists('hours');
        //Creates the New table
        Schema::create('hours', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->bigInteger('HoraId');
            $table->date('Fecha');
            $table->integer('HoraEntrada');
            $table->integer('HoraSalida');
            $table->string('Descripcion');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hours');
    }
}
