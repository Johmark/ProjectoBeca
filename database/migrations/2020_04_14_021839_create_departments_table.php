<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //If the nigration has been previsly executed it drops the table
        Schema::dropIfExists('departments');
        //Creates the New table
        Schema::create('departments', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->bigInteger('DepartamentoId');
            $table->string('Nombre');

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
        Schema::dropIfExists('departments');
    }
}
