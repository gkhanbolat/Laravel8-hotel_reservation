<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title',150);
            $table->string('keywords')->nullable();
            $table->string('descriptions')->nullable();
            $table->string('company',75)->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('smtpserver',30)->nullable();
            $table->string('smtpemail',30)->nullable();
            $table->string('smtppassword',30)->nullable();
            $table->string('smtpport',30)->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter',150)->nullable();
            $table->text('aboutus')->nullable();
            $table->text('contact')->nullable();
            $table->text('references')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
