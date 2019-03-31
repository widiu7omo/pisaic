<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archoses', function (Blueprint $table) {
            $table->increments('id');
            $table->text('hose_a')->nullable();
            $table->text('hose_b')->nullable();
            $table->text('hose_c')->nullable();
            $table->text('hose_d')->nullable();
            $table->text('hose_a')->nullable();
            $table->text('hose_e')->nullable();
            $table->text('hose_f')->nullable();
            $table->text('hose_g')->nullable();
            $table->text('hose_h')->nullable();
            $table->text('hose_j')->nullable();
            $table->text('hose_k')->nullable();
            $table->text('hose_l')->nullable();
            $table->text('hose_m')->nullable();
            $table->text('hose_n')->nullable();
            $table->text('hose_o')->nullable();
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
        Schema::dropIfExists('archoses');
    }
}
