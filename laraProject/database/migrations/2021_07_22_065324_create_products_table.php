<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('productsId')->unsigned()->index();
            $table->string('nome', 50);
            $table->dateTime('dataCreazione');
            $table->float('prezzo');
            $table->text('noteTecniche', 500);
            $table->text('modInstallaz', 500);
            $table->text('problema', 500);
            $table->text('soluzione', 500);  
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
        Schema::dropIfExists('product');
    }
}
