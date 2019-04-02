<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSheetdailychecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sheetdailychecks', function (Blueprint $table) {
            $table->increments('id');
            $table->text('boom_cylinder_l')->nullable();
            $table->text('boom_cylinder_r')->nullable();
            $table->text('stick_cylinder_l')->nullable();
            $table->text('stick_cylinder_r')->nullable();
            $table->text('bucket_cylinder_l')->nullable();
            $table->text('bucket_cylinder_r')->nullable();
            $table->text('bulkclamp_cylinder_l')->nullable();
            $table->text('bulkclamp_cylinder_r')->nullable();
            $table->text('hydraulic_tank')->nullable();
            $table->text('control_value')->nullable();
            $table->integer('cylinderdailychecksheet_id')->unsigned();
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
        Schema::dropIfExists('sheetdailychecks');
    }
}
