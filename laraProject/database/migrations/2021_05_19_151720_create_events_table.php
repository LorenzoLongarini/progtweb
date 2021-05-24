<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->string('title',50);
            $table->string('location',50);
            $table->string('region',25);
            $table->date('date');
            $table->string('descShort',50);
            $table->string('descLong', 2000);
            $table->string('image')->nullable();
            $table->integer('tickets');
            $table->integer('ticketsSold');
            $table->float('price');
            $table->integer('discount')->nullable();
            $table->date('startDisc')->nullable();
            $table->string('host',50);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
