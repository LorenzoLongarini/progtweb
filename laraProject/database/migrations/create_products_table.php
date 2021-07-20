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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('productsId')->unsigned()->index();
            $table->bigInteger('usersId')->unsigned()->index();
            $table->foreign('usersId')->references('usersId')->on('users')->onDelete('cascade');
            $table->bigInteger('malfunctionsId')->unsigned()->index();
            $table->foreign('malfunctionsId')->references('malfunctionsId')->on('malfunctions')->onDelete('cascade');
            $table->string('nome', 50);
            $table->dateTime('dataCreazione');
            $table->float('prezzo');
            $table->text('noteTecniche', 500);
            $table->text('modInstallaz', 500);
            $table->text('malfunzionamenti', 500);
            $table->text('soluzioni', 500);
            $table->text('imgName', 150)->nullable();
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
