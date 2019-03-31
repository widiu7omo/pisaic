<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOilcentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oilcenters', function (Blueprint $table) {
            $table->increments('id');
            $table->text('oil_cooler_u')->nullable();
            $table->text('fan_motor_u')->nullable();
            $table->text('hosses_u')->nullable();
            $table->text('oil_cooler_l')->nullable();
            $table->text('fan_motor_l')->nullable();
            $table->text('hosses_l')->nullable();
            $table->text('pulsation_damper')->nullable();
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
        Schema::dropIfExists('oilcenters');
    }
}
