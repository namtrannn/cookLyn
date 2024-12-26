<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dish extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dish',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->integer('id_category')->unsigned();
            $table->foreign('id_category')->references('id')->on('category')->onDelete('cascade');
            $table->string('amount');
            $table->integer('eater');          
            $table->string('materials');
            $table->string('note');
            $table->integer('status');
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
        Schema::dropIfExists('dish');
    }
}
