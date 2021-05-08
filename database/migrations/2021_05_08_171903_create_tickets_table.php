<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("seet_trip_id")->unsigned()->index();
            $table->foreign('seet_trip_id')->references('id')->on('seet_trips')->onDelete('cascade');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('pickup_id')->unsigned()->index();
            $table->foreign('pickup_id')->references('id')->on('wards')->onDelete('cascade');
            $table->integer('destination_id')->unsigned()->index();
            $table->foreign('destination_id')->references('id')->on('wards')->onDelete('cascade');
            $table->string('name');
            $table->string('phone');
            $table->enum('status', ['Not gone', 'Gone', 'Canceled']);
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
        Schema::dropIfExists('tickets');
    }
}
