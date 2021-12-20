<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title',150);
            $table->string('keywords')->nullable();
            $table->string('descriptions')->nullable();
            $table->string('image',75)->nullable();
            $table->integer('category_id')->nullable();
            $table->string('detail')->nullable();
            $table->integer('star')->nullable();
            $table->string('address',150)->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('email',30)->nullable();
            $table->string('city',25)->nullable();
            $table->string('country',25)->nullable();
            $table->string('location',150)->nullable();
            $table->integer('userid')->nullable();
            $table->string('status',5)->nullable()->default('False');
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
        Schema::dropIfExists('hotels');
    }
}
