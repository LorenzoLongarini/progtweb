<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartecipazioniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partecipazioni', function (Blueprint $table) {
            $table->bigInteger('utenteId')->unsigned()->index();
            $table->foreign('utenteId')->references('utenteId')->on('users');
            $table->bigInteger('eventoId')->unsigned()->index();
            $table->foreign('eventoId')->references('eventoId')->on('eventi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partecipazioni');
    }
}
