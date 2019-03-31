<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirconditioningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airconditionings', function (Blueprint $table) {
            $table->increments('id');
            $table->text('operator_opinion')->nullable();
            $table->text('fan_condensor')->nullable();
            $table->text('condensor')->nullable();
            $table->text('hose_suction_adc')->nullable();
            $table->text('electrical_ac_c')->nullable();
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
        Schema::dropIfExists('airconditionings');
    }
}
