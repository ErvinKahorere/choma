<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOurpicksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_picks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('card_product_name');
            $table->mediumText('card_product_description');
            $table->string('card_old_price');
            $table->string('card_new_price');
            $table->string('cover_image');
            $table->integer('category_id');
            $table->string('card_merchant_name');
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
        Schema::dropIfExists('our_picks');
    }
}
