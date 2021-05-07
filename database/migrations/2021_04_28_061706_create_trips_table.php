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
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->integer('start_point_id');
            $table->integer('end_point_id');
            $table->decimal('price');
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
