<?php

use Illuminate\Database\Seeder;
use App\InspectCamera;

class InspectCameraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(InspectCamera::class,20)->create();
    }
}
