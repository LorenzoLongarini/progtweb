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
            $table->bigIncrements('eventoId')->unsigned()->index();
            $table->bigInteger('utenteId')->unsigned()->index();
            $table->foreign('utenteId')->references('utenteId')->on('users')->onDelete('cascade');
            $table->string('titolo', 50);
            $table->string('artista', 50);
            $table->dateTime('data');
            $table->string('luogo', 150);
            $table->set('regione', 
            ['Aosta', 'Piemonte', 'Liguria', 'Lombardia', 'Trentino Alto Adige',
            'Friuli Venezia Giulia', 'Veneto', 'Emilia Romagna', 'Toscana', 'Umbria', 
            'Marche', 'Lazio', 'Abruzzo', 'Molise',
            'Puglia', 'Campania', 'Calabria', 'Basilicata', 'Sicilia', 'Sardegna']);
            $table->float('prezzo');
            $table->text('descrizione', 200);
            $table->text('programma', 1500)->nullable();
            $table->integer('bigliettiTotali')->unsigned();
            $table->tinyInteger('sconto')->nullable();
            $table->date('dataSconto')->nullable();
            $table->string('mapsUrl', 300);
            $table->string('imgName', 150)->nullable();
            $table->enum('statoEvento', ['attivo', 'sospeso', 'chiuso']);
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
