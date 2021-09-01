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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('productsId')->unsigned()->index();
            $table->string('nome', 50);
            $table->float('prezzo');
            $table->text('noteTecniche', 500);
            $table->text('descrizione', 500);
            $table->text('modInstallaz', 500);  
            $table->text('imgName', 150)->nullable();
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
