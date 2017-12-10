<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('card_product_name');
            $table->mediumText('card_product_description');
            $table->string('card_old_price');
            $table->string('card_new_price');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('channel_id');
            $table->string('cover_image');
            $table->integer('category_id');
           // $table->integer('city_id');
            $table->integer('card_duration');
            $table->boolean('approved');
            $table->unsignedInteger('merchant_id');
            $table->string('card_discount_percentage');
            //$table->string('card_merchant_name');
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
        Schema::dropIfExists('cards');
    }
}
