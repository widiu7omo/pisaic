<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePipeboomstickclampsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pipeboomstickclamps', function (Blueprint $table) {
            $table->increments('id');
            $table->text('pipe_to_bucket_lh')->nullable();
            $table->text('pipe_to_bucket_rh')->nullable();
            $table->text('pipe_to_boom_lh')->nullable();
            $table->text('pipe_to_boom_rh')->nullable();
            $table->text('pin_busing_rhlh_b')->nullable();
            $table->text('injector_grease_lb')->nullable();
            $table->text('slip_ring')->nullable();
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
        Schema::dropIfExists('pipeboomstickclamps');
    }
}
