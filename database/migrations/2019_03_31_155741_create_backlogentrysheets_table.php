<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBacklogentrysheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backlogentrysheets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('daytime')->nullable();
            $table->string('branch')->nullable();
            $table->string('tipe_unit')->nullable();
            $table->string('sumber_temuan')->nullable();
            $table->string('problem')->nullable();
            $table->string('hm_unit')->nullable();
            $table->string('estimasi_job')->nullable();
            $table->string('resp')->nullable();
            $table->string('work_zone')->nullable();
            $table->string('suggest_action')->nullable();
            $table->string('priority')->nullable();
            $table->string('part_number')->nullable();
            $table->string('part_desc')->nullable();
            $table->string('figure')->nullable();
            $table->string('index')->nullable();
            $table->string('quantity')->nullable();
            $table->string('mark')->nullable();
            $table->string('backlog_date')->nullable();
            $table->integer('unit_id')->unsigned();
            $table->integer('masterlog_id')->unsigned();
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
        Schema::dropIfExists('backlogentrysheets');
    }
}
