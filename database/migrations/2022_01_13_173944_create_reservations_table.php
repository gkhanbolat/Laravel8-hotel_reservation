<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('hotel_id');
            $table->integer('room_id');
            $table->string('name');
            $table->string('surname');
            $table->string('email');
            $table->integer('phone');
            $table->float('total');
            $table->integer('check_in');
            $table->integer('check_out');
            $table->integer('days');
            $table->integer('adults');
            $table->integer('children');
            $table->string('IP');
            $table->string('note');
            $table->string('status')->default('New');
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
        Schema::dropIfExists('reservations');
    }
}
