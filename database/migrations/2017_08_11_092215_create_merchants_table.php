<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('merchant_name');
            $table->string('merchant_physical_address');
            $table->string('merchant_city');
            $table->double('merchant_lat', 20,10);
            $table->double('merchant_lng', 20,10);
            $table->string('merchant_phone');
            $table->string('merchant_email');
            $table->longText('merchant_description');
            $table->string('merchant_website');
            $table->string('merchant_facebook');
            $table->string('merchant_twitter');
            $table->string('merchant_logo');
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
        Schema::dropIfExists('merchants');
    }
}
