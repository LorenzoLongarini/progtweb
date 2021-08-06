<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMalfunctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('malfunctions', function (Blueprint $table) {
            $table->bigIncrements('malfunctionsId')->unsigned()->index();
            $table->bigInteger('productsId')->unsigned()->index()->nullable();
            $table->foreign('productsId')->references('productsId')->onDelete('SET NULL')->on('products');
            $table->text('problema', 500);
            $table->text('soluzione', 500);  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('malfunctions');
    }
}
