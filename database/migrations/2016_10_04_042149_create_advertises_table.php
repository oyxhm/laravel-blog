<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('advertises',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('sponser');
            $table->integer('level');
            $table->string('imgurl');
            $table->string('desc');
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
        Schema::drop('advertises');
    }
}
