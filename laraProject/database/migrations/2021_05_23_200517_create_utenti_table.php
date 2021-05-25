<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtentiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utenti', function (Blueprint $table) {
            $table->bigIncrements('utenteId')->unsigned()->index();
            $table->string('nome', 50)->nullable();
            $table->string('cognome', 50)->nullable();
            $table->string('ragioneSociale', 40)->nullable();
            $table->string('ivaFiscale', 40);
            $table->date('dataNascita')->nullable();
            $table->string('email', 40);
            $table->string('username', 25);
            $table->string('password', 30);
            $table->string('telefono', 10);
            $table->string('via', 50);
            $table->string('cap', 7);
            $table->string('città', 80);
            $table->set('livello', ['cliente', 'organizzatore', 'admin']);        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utenti');
    }
}
