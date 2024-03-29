<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssistenceCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assistence_centers', function (Blueprint $table) {
            $table->bigIncrements('centersId')->unsigned()->index();//->references('centersId')->onDelete('cascade')->on('users');
            $table->text('nome', 30);
            $table->text('città',30);
            $table->text('regione', 30);
            $table->text('via', 30);
            $table->text('email', 30);
            $table->double('telefono', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assistence_centers');
    }
}
