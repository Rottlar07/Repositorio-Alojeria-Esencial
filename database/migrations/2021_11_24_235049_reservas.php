<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reservas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('Nombres');
            $table->string('Apellidos');
            $table->string('Dni');
            $table->string('Correo');
            $table->string('Celular');
            $table->bigInteger('Evento_id')->unsigned();
            $table->foreign('Evento_id')->references('id')->on('eventos')->onDelete("cascade");
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
