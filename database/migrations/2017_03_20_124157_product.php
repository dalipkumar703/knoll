<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('productname');
            $table->string('composition');
            $table->string('packing');
            $table->string('mrp');
            $table->string('division');
            $table->string('category');
            $table->rememberToken();
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
        //
        Schema::drop('product');
    }
}
