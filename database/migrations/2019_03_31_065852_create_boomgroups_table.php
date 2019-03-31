<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoomgroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boomgroups', function (Blueprint $table) {
            $table->increments('id');
            $table->text('boom')->nullable();
            $table->text('boom_cylinder_lh')->nullable();
            $table->text('cylinder_protector_lhb')->nullable();
            $table->text('boom_cylinder_rh')->nullable();
            $table->text('cylinder_protector_rhb')->nullable();
            $table->text('pin_bushing_rhlhcb')->nullable();
            $table->text('pin_bushing_rhlhbts')->nullable();
            $table->text('hose_high_pressure_pctbc')->nullable();
            $table->text('hose_high_pressure_pctsc')->nullable();
            $table->text('hose_high_pressure_pctcc')->nullable();
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
        Schema::dropIfExists('boomgroups');
    }
}
