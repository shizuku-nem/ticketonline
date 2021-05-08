<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeetTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seet_trips', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('seet_car_id')->unsigned()->index();
            $table->foreign('seet_car_id')->references('id')->on('seet_cars')->onDelete('cascade');
            $table->integer('trip_id')->unsigned()->index();
            $table->foreign('trip_id')->references('id')->on('trips')->onDelete('cascade');
            $table->enum('status',['Ordered', 'Not ordered', 'Not seet']);
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
        Schema::dropIfExists('seet_trips');
    }
}
