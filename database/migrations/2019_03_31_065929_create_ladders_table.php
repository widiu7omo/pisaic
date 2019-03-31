<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaddersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ladders', function (Blueprint $table) {
            $table->increments('id');
            $table->text('cylinder')->nullable();
            $table->text('mounting')->nullable();
            $table->text('handrail_la')->nullable();
            $table->text('electric_part')->nullable();
            $table->integer('zone1_id')->unsigned();
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
        Schema::dropIfExists('ladders');
    }
}
