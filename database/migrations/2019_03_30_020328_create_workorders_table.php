<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workorders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date')->default('00-00-0000');
            $table->string('wo_no')->nullable();
            $table->string('revisi_sr')->nullable();
            $table->string('po_cus')->nullable();
            $table->string('product_name');
            $table->string('model_unit')->nullable();
            $table->string('model_engine')->nullable();
            $table->string('estimasi_job')->nullable();
            $table->text('catatan')->nullable();
            $table->string('ttd_sdh')->nullable();
            $table->string('sdh_name')->nullable();
            $table->integer('pisheet_id')->unsigned();
            // $table->integer('unit_id')->unsigned();
            // $table->integer('component_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workorders');
    }
}
