<?php

use Illuminate\Database\Seeder;
use App\LogUnit;
class LogUnitSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        LogUnit::create([
            'name'=>'Periodict Inspection Sheet'
        ]);
        LogUnit::create([
            'name'=>'Inspection Camera'
        ]);
        LogUnit::create([
            'name'=>'Problem Log'
        ]);
        LogUnit::create([
            'name'=>'Backlog Entry Sheet'
        ]);
        LogUnit::create([
            'name'=>'Backlog Monitoring Sheet'
        ]);
        LogUnit::create([
            'name'=>'Cylinder Daily Check Sheet'
        ]);
    }
}
