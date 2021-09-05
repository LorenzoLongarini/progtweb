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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('usersId')->unsigned()->index();
            $table->bigInteger('centersId')->unsigned()->index()->nullable();
            $table->foreign('centersId')->references('centersId')->onDelete('SET NULL')->on('assistence_centers');
            $table->string('nome', 50)->nullable();
            $table->string('cognome', 50)->nullable();
            $table->string('ivacf', 40);
            $table->date('dataNascita')->nullable();
            $table->string('email', 40);
            $table->string('username', 25);
            $table->string('password',300);
            $table->string('telefono', 10);
            $table->string('via', 50);
            $table->string('cap', 7);
            $table->string('città', 80);
            $table->set('sottocategoria', 
            ['','telefonia', 'televisori', 'computers', 'stampanti'])->nullable();
            $table->string('role',20)->default('tecnico');        
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
