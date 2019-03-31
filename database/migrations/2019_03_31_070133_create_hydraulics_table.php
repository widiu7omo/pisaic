<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHydraulicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hydraulics', function (Blueprint $table) {
            $table->increments('id');
            $table->text('hydraulic_tank_oil')->nullable();
            $table->text('collector_pipe')->nullable();
            $table->text('hose')->nullable();
            $table->text('control_block_n1')->nullable();
            $table->text('control_block_n2')->nullable();
            $table->text('control_block_n3')->nullable();
            $table->text('sensor')->nullable();
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
        Schema::dropIfExists('hydraulics');
    }
}
