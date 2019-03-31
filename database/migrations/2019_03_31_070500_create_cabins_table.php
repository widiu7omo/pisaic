<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCabinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabins', function (Blueprint $table) {
            $table->increments('id');
            $table->text('gaude_a_switch')->nullable();
            $table->text('horn')->nullable();
            $table->text('monitor_panel')->nullable();
            $table->text('lamp_cabin')->nullable();
            $table->text('joystick')->nullable();
            $table->text('pedal_travel')->nullable();
            $table->text('pedal_bullclamp')->nullable();
            $table->text('radio_tape_arc')->nullable();
            $table->text('rotary_lamp')->nullable();
            $table->text('worklamp')->nullable();
            $table->text('wipper')->nullable();
            $table->text('door')->nullable();
            $table->text('shockabsorber')->nullable();
            $table->text('emergency_ladder')->nullable();
            $table->text('pilot_cut_ol')->nullable();
            $table->text('operator_seat_asb')->nullable();
            $table->text('fire_suppression_unit')->nullable();
            $table->text('monitor_camera')->nullable();
            $table->text('apar')->nullable();
            $table->text('antenna_orbcom')->nullable();
            $table->text('antenna_radio')->nullable();
            $table->integer('zone3_id')->unsigned();
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
        Schema::dropIfExists('cabins');
    }
}
