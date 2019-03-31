<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelatedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relateds', function (Blueprint $table) {
            $table->increments('id');
            $table->text('return_filter')->nullable();
            $table->text('internal_leak_filter')->nullable();
            $table->text('breather_hydraulic_tank')->nullable();
            $table->text('lamp')->nullable();
            $table->text('mirror_lh')->nullable();
            $table->text('mirror_rh')->nullable();
            $table->text('hand_rail')->nullable();
            $table->text('camera')->nullable();
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
        Schema::dropIfExists('relateds');
    }
}
