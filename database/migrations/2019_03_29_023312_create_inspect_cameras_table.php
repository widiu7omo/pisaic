<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInspectCamerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspect_cameras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pemeriksa');
            $table->string('tanggal_pemeriksaan');
            $table->string('nama_komponen');
            $table->string('foto')->nullable();
            $table->string('ttd_pemeriksa')->nullable();
            $table->integer('logunit_id')->unsigned();
            $table->integer('unit_id');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inspect_cameras');
    }
}
