<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputSubcomponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('input_subcomponents', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('name');
        //     $table->string('value');
        //     $table->integer('subcomponent_id')->unsigned();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('input_subcomponents');
    }
}
