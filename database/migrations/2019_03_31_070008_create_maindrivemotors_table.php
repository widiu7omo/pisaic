<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaindrivemotorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maindrivemotors', function (Blueprint $table) {
            $table->increments('id');
            $table->text('abnormal_noise_do')->nullable();
            $table->text('drive_motor_smrhlh')->nullable();
            $table->text('connection_box')->nullable();
            $table->text('capacitor')->nullable();
            $table->text('fan_air_ish')->nullable();
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
        Schema::dropIfExists('maindrivemotors');
    }
}
