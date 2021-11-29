<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Eventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('Nombre');
            $table->string('Categoria');
            $table->string('Restriccion');
            $table->date('Fecha');
            $table->time('Hora', $precision = 0);
            $table->decimal('Monto', $precision = 8, $scale = 2);
            $table->integer('Aforo');
            $table->string('Foto');
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
