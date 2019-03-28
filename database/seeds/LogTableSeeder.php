<?php
use App\Log;
use Illuminate\Database\Seeder;

class LogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Log::create([
            'name'=>'Periodict Inspection Sheet'
        ]);
        Log::create([
            'name'=>'Inspection Camera'
        ]);
        Log::create([
            'name'=>'Problem Log'
        ]);
        Log::create([
            'name'=>'Backlog Entry Sheet'
        ]);
        Log::create([
            'name'=>'Backlog Monitoring Sheet'
        ]);
        Log::create([
            'name'=>'Cylinder Daily Check Sheet'
        ]);
    }
}
