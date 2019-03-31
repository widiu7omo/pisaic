<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCenterframesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centerframes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('swing_circle_b')->nullable();
            $table->text('mounting_bolt_cbrhlh')->nullable();
            $table->text('teeth_swing_c')->nullable();
            $table->text('hv_cable_connector')->nullable();
            $table->text('cable_duct')->nullable();
            $table->text('cable_singer')->nullable();
            $table->text('swivel_joint')->nullable();
            $table->text('hv_cable_pilot_c')->nullable();
            $table->integer('zone1_id')->unsigned();
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
        Schema::dropIfExists('centerframes');
    }
}
