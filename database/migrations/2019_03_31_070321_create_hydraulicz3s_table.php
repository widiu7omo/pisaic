<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHydraulicz3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hydraulicz3s', function (Blueprint $table) {
            $table->increments('id');
            $table->text('block_srv_acv_a_b')->nullable();
            $table->text('block_srv_acv_c_d')->nullable();
            $table->text('block_srv_acv_e_f')->nullable();
            $table->text('block_srv_acv_g_h')->nullable();
            $table->text('block_srv_acv_j_k')->nullable();
            $table->text('block_srv_acv_l_m')->nullable();
            $table->text('block_srv_acv_n_o')->nullable();
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
        Schema::dropIfExists('hydraulicz3s');
    }
}
