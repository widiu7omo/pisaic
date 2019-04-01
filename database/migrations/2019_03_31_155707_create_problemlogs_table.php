<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblemlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problemlogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('daydate')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('jobtype')->nullable();
            $table->string('wo_no')->nullable();
            $table->string('sv_or_ml')->nullable();
            $table->string('problem')->nullable();
            $table->string('dampak')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->string('resp')->nullable();
            $table->string('pelapor')->nullable();
            $table->text('langkah_sementara')->nullable();
            $table->text('langkah_permanen')->nullable();
            $table->integer('unit_id')->unsigned();
            $table->integer('masterlog_id')->unsigned();
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
        Schema::dropIfExists('problemlogs');
    }
}
