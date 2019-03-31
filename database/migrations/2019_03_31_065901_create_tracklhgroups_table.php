<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTracklhgroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracklhgroups', function (Blueprint $table) {
            $table->increments('id');
            $table->text('idler')->nullable();
            $table->text('adjusting_track_c')->nullable();
            $table->text('track_roller')->nullable();
            $table->text('carrier_roller')->nullable();
            $table->text('trackpad')->nullable();
            $table->text('pin_trackpad')->nullable();
            $table->text('sproket')->nullable();
            $table->text('track_tension_c')->nullable();
            $table->text('lh_travel_gbmh')->nullable();
            $table->text('level_thick_osuclh')->nullable();
            $table->text('level_thick_osucrh')->nullable();
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
        Schema::dropIfExists('tracklhgroups');
    }
}
