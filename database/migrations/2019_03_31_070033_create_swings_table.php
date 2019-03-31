<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSwingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('swings', function (Blueprint $table) {
            $table->increments('id');
            $table->text('swing_motor')->nullable();
            $table->text('gear_box')->nullable();
            $table->text('swing_motor_adapter')->nullable();
            $table->text('hose_part_related')->nullable();
            $table->text('increasing_valve_sb')->nullable();
            $table->integer('zone2_id')->unsigned();
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
        Schema::dropIfExists('swings');
    }
}
