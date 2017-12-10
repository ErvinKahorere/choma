<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComboDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combo_deals', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('combo_description');
            $table->string('offer1_image');
            $table->string('offer1_title');
            $table->mediumText('offer1_description');
            $table->string('offer2_image');
            $table->string('offer2_title');
            $table->mediumText('offer2_description');
            $table->string('offer3_image');
            $table->string('offer3_title');
            $table->mediumText('offer3_description');
            $table->string('combo_old_price');
            $table->string('combo_new_price');
            $table->double('combo_lat', 20,10);
            $table->double('combo_lng', 20,10);
            $table->string('combo_phone');
            $table->string('combo_email');
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
        Schema::dropIfExists('combo_deals');
    }
}
