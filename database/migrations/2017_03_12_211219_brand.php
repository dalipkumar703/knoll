<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Brand extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('brand', function (Blueprint $table) {
            $table->increments('id');
            $table->string('manufacturer');
            $table->string('brand');
            $table->string('type');
            $table->string('category');
            $table->string('unit');
            $table->string('packageunit');
            $table->string('price');
            $table->string('priceunit');
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
         Schema::drop('brand');  
    }
}
