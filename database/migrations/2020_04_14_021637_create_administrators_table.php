<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //If the nigration has been previsly executed it drops the table
        Schema::dropIfExists('administrators');
        //Creates the New table
        Schema::create('administrators', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->bigInteger('CodigoAdmin');
            $table->string('Nombre');
            $table->string('Contraseña');
            $table->string('Departamento');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administrators');
    }
}
