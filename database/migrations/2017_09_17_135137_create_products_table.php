<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id'); 
            $table->string('sku'); 
            $table->string('name'); 
            $table->string('supplier'); 
            $table->string('description'); 
            $table->smallInteger('status'); 
            $table->string('categories'); 
            $table->string('attributes'); 
            $table->string('quantity'); 
            $table->integer('price'); 
            $table->string('dateProduced'); 
            $table->string('placeProduced'); 
            $table->smallInteger('canExpired'); 
            $table->string('dateExpired'); 
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
        Schema::dropIfExists('products');
    }
}