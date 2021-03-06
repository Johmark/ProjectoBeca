<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //If the nigration has been previsly executed it drops the table
        Schema::dropIfExists('users');
        //Creates the New table
        Schema::create('users', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->bigInteger('CodigoUsuario');
            $table->string('Nombre');
            $table->string('Contraseña');
            $table->string('Departamento');
            $table->string('Escuela');
            $table->bigInteger('HorasTrabajadas');
            $table->bigInteger('CantidadAcumulada');


            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
