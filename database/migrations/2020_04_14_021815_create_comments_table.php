<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //If the nigration has been previsly executed it drops the table
        Schema::dropIfExists('comments');
        //Creates the New table
        Schema::create('comments', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->bigInteger('CommentarioId');
            $table->date('Fecha');
            $table->string('Contenido');

            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
