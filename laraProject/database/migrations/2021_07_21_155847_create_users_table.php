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
            $table->string('nome', 50)->nullable();
            $table->string('cognome', 50)->nullable();
            $table->string('ragioneSociale', 40)->nullable();
            $table->string('iva/cf', 40);
            $table->date('dataNascita')->nullable();
            $table->string('email', 40);
            $table->string('username', 25);
            $table->string('password',20);
            $table->string('telefono', 10);
            $table->string('via', 50);
            $table->string('cap', 7);
            $table->string('città', 80);
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
        Schema::dropIfExists('user');
    }
}
