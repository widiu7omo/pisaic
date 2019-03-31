<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchoseuppersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archoseuppers', function (Blueprint $table) {
            $table->increments('id');
            $table->text('hose_piping_tb_lhb')->nullable();
            $table->text('hose_piping_tb_rhb')->nullable();
            $table->text('hose_piping_tb_lhr')->nullable();
            $table->text('hose_piping_tb_rhr')->nullable();
            $table->text('hose_piping_tc_lh')->nullable();
            $table->text('hose_piping_tc_rh')->nullable();
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
        Schema::dropIfExists('archoseuppers');
    }
}
