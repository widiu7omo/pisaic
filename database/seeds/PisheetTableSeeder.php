<?php

use Illuminate\Database\Seeder;
use App\Pisheet;
class PisheetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Pisheet::create([
            'unit_id'=>1,
            'masterlog_id'=>1
        ]);
        Pisheet::create([
            'unit_id'=>2,
            'masterlog_id'=>1
        ]);
        Pisheet::create([
            'unit_id'=>3,
            'masterlog_id'=>1
        ]);
    }
}
