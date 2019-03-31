<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBucketgroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bucketgroups', function (Blueprint $table) {
            $table->increments('id');
            $table->text('teeth_bucket')->nullable();
            $table->text('lp_teeth_bucket')->nullable();
            $table->text('shroud')->nullable();
            $table->text('bucket_hff')->nullable();
            $table->text('clamp_cylinder_lh')->nullable();
            $table->text('clamp_cylinder_rh')->nullable();
            $table->text('pin_bushing_lhrhcc')->nullable();
            $table->text('bucket_cylinder_lh')->nullable();
            $table->text('bucket_cylinder_rh')->nullable();
            $table->text('pin_bushing_lhrhff')->nullable();
            $table->text('pin_bushing_lhrhcb')->nullable();
            $table->text('injector_grease_ll')->nullable();
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
        Schema::dropIfExists('bucketgroups');
    }
}
