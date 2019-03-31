<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePdgpumpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdgpumps', function (Blueprint $table) {
            $table->increments('id');
            $table->text('flexible_coupling')->nullable();
            $table->text('pto')->nullable();
            $table->text('pto_relief_valve')->nullable();
            $table->text('accumulator_pilot_p')->nullable();
            $table->text('all_hoe_related')->nullable();
            $table->text('electric_equipment')->nullable();
            $table->text('pilot_control_pump')->nullable();
            $table->text('pto_lubrication_pump')->nullable();
            $table->text('pump_fan_oc')->nullable();
            $table->text('high_pressure_f')->nullable();
            $table->text('pump_n1')->nullable();
            $table->text('pump_n2')->nullable();
            $table->text('pump_n3')->nullable();
            $table->text('shutoff_valve_ht')->nullable();
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
        Schema::dropIfExists('pdgpumps');
    }
}
