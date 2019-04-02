<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataunitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataunits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date')->default('00-00-0000');
            $table->string('location');
            $table->string('sn_unit')->nullable();
            $table->string('smr_uni')->nullable();
            $table->string('smr_travel')->nullable();
            $table->string('kwh_meter')->nullable();
            $table->string('inspect_start')->nullable();
            $table->string('inspect_end')->nullable();
            $table->string('operator_name')->nullable();
            $table->string('tanggal_teknisi_tiba')->nullable();
            $table->string('tanggal_teknisi_meninggalkan')->nullable();
            $table->string('tanggal_teknisi_selesai')->nullable();
            $table->string('hasil_pekerjaan_teknisi_selesai')->nullable();
            $table->string('hasil_pekerjaan_teknisi_memuaskan')->nullable();
            $table->string('penilaian_teknisi')->nullable();
            $table->string('ttd_operator')->nullable();
            $table->string('mekanik_name')->nullable();
            $table->string('ttd_mekanik')->nullable();
            $table->string('mekanik_leader_name')->nullable();
            $table->string('ttd_mekanik_leader_name')->nullable();
            $table->string('supervisor_name')->nullable();
            $table->string('catatan_supervisor')->nullable();
            $table->string('ttd_supervisor')->nullable();
            // $table->integer('logunit_id')->unsigned();
            // $table->integer('unit_id')->unsigned();
            // $table->integer('component_id')->unsigned();
            $table->integer('pisheet_id')->unsigned();
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
        Schema::dropIfExists('dataunits');
    }
}
