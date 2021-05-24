<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventi', function (Blueprint $table) {
            $table->bigIncrements('eventoId')->primarykey();
            $table->bigInteger('utenteId')->unsigned()->index();
            $table->foreign('utenteId')->references('utenteId')->on('utenti');
            $table->string('titolo', 50);
            $table->string('artista', 50);
            $table->date('data');
            $table->string('luogo', 150);
            $table->float('prezzo');
            $table->text('descrizione', 4000);
            $table->text('programma', 1500);
            $table->integer('biglietti_disp');
            $table->tinyInteger('sconto');
            $table->timestamp('data_sconto');
            $table->string('maps_url', 300);
            $table->string('img_name', 150);
            $table->set('stato_evento', ['attivo', 'sospeso']);
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
        Schema::dropIfExists('eventi');
    }
}
