<?php

use Illuminate\Database\Seeder;
use App\Component;

class ComponentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Component::create([
            'name'=>'Work Order & Others',
            'log_unit_id'=>1
        ]);
        Component::create([
            'name'=>'Data Unit',
            'log_unit_id'=>1
        ]);
        Component::create([
            'name'=>'Zone 1 : Front Attachment & Track Group',
            'log_unit_id'=>1
        ]);
        Component::create([
            'name'=>'Zone 2 : Upper Front, Central Frame & Motor Area',
            'log_unit_id'=>1
        ]);
        Component::create([
            'name'=>'Zone 3 : Upper Rear Area - Cabin & Motor Container',
            'log_unit_id'=>1
        ]);

    }
}
