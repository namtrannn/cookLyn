<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Recipes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->integer('id_dish')->unsigned();
            $table->foreign('id_dish')->references('id')->on('dish')->onDelete('cascade');
            $table->string('step_1');
            $table->string('image_1');
            $table->string('step_2');
            $table->string('image_2');
            $table->string('step_3');
            $table->string('image_3');
            $table->string('step_4');
            $table->string('image_4');
            $table->string('step_5');
            $table->string('image_5');
            $table->string('step_6');
            $table->string('image_6');     
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
        Schema::dropIfExists('recipes');
    }
}
