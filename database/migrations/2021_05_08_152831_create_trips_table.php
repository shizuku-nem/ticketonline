<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // $table->enum('type', ['Not seet', 'Economy', 'Business']);
        Schema::create('trips', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('car_id')->unsigned()->index();
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
            $table->integer('start_point_id')->unsigned()->index();
            $table->foreign('start_point_id')->references('id')->on('provinces')->onDelete('cascade');
            $table->integer('end_point_id')->unsigned()->index();
            $table->foreign('end_point_id')->references('id')->on('provinces')->onDelete('cascade');
            $table->integer('price');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
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
        Schema::dropIfExists('trips');
    }


}
