<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBigliettiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biglietti', function (Blueprint $table) {
            $table->bigIncrements('bigliettoId');
            $table->bigInteger('utenteId')->unsigned()->index();
            $table->foreign('utenteId')->references('utenteId')->on('users');
            $table->bigInteger('eventoId')->unsigned()->index();
            $table->foreign('eventoId')->references('eventoId')->on('eventi');
            $table->float('prezzoAcquisto');
            $table->integer('dataAcquisto');
            $table->enum('metodoPagamento', ['Carta di credito', 'PayPal', 'Bonifico Bancario']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biglietti');
    }
}
