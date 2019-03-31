<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sls', function (Blueprint $table) {
            $table->increments('id');
            $table->text('pump_a_gauge')->nullable();
            $table->text('valve')->nullable();
            $table->text('line')->nullable();
            $table->text('grease_sls_level')->nullable();
            $table->text('electric_related_part')->nullable();
            $table->integer('zone2_id')->unsigned();
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
        Schema::dropIfExists('sls');
    }
}
