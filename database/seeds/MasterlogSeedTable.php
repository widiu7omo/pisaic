<?php

use Illuminate\Database\Seeder;
use App\Masterlog;
class MasterlogSeedTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Masterlog::create([
            'name'=>'Periodict Inspection Sheet'
        ]);
        Masterlog::create([
            'name'=>'Inspection Camera'
        ]);
        Masterlog::create([
            'name'=>'Problem Log'
        ]);
        Masterlog::create([
            'name'=>'Backlog Entry Sheet'
        ]);
        Masterlog::create([
            'name'=>'Backlog Monitoring Sheet'
        ]);
        Masterlog::create([
            'name'=>'Cylinder Daily Check Sheet'
        ]);
    }
}
