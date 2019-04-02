<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataunitdailychecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataunitdailychecks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('checking_date')->nullable();
            $table->string('unit_model')->nullable();
            $table->string('branch_site')->nullable();
            $table->string('end_customer')->nullable();
            $table->string('hours_meter')->nullable();
            $table->string('no_form')->nullable();
            // $table->string('no_form')->nullable(); //@TODO: same name column
            $table->string('division')->nullable();
            $table->string('revition')->nullable();
            $table->string('approve_by')->nullable();
            $table->string('ttd_approver')->nullable();
            $table->string('created_by')->nullable();
            $table->string('ttd_creator')->nullable();
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
        Schema::dropIfExists('dataunitdailychecks');
    }
}
