<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStickgroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stickgroups', function (Blueprint $table) {
            $table->increments('id');
            $table->text('stick')->nullable();
            $table->text('stick_cylinder_lh')->nullable();
            $table->text('pin_bushing_rhlhstb')->nullable();
            $table->text('cylinder_protector_lhs')->nullable();
            $table->text('stick_cylinder_rh')->nullable();
            $table->text('cylinder_protector_rhs')->nullable();
            $table->text('pin_bushing_rhlhcs')->nullable();
            $table->text('injector_grease_ls')->nullable();
            $table->text('cls_pressure_s_w')->nullable();
            $table->text('hose_high_pressure_pctbc')->nullable();
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
        Schema::dropIfExists('stickgroups');
    }
}
