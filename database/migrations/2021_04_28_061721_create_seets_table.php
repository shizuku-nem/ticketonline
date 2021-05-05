<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seets', function (Blueprint $table) {
            $table->id()->unique();
            $table->integer('idTrip');
            $table->integer('row');
            $table->integer('col');
            $table->enum('type', ['Not seet', 'Economy', 'Business']);
            $table->boolean('status');
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
        Schema::dropIfExists('seets');
    }
}
