<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaJugadores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('club_id')->unsigned();
            $table->string('name');
            $table->enum('td',['CC','TI', 'Pasaporte']);
            $table->string('documento');
            $table->string('fecha');
            $table->string('rh');
            $table->string('eps');
            $table->string('contacto');

            $table->timestamps();

            $table->foreign('club_id')->references('id')->on('clubes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jugadores');
    }
}
