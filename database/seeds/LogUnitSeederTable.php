<?php

use Illuminate\Database\Seeder;
use App\Logunit;
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
        Logunit::create([
            'name'=>'Periodict Inspection Sheet'
        ]);
        Logunit::create([
            'name'=>'Inspection Camera'
        ]);
        Logunit::create([
            'name'=>'Problem Log'
        ]);
        Logunit::create([
            'name'=>'Backlog Entry Sheet'
        ]);
        Logunit::create([
            'name'=>'Backlog Monitoring Sheet'
        ]);
        Logunit::create([
            'name'=>'Cylinder Daily Check Sheet'
        ]);
    }
}
