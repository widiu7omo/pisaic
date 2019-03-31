<?php

use Illuminate\Database\Seeder;
use App\Workorder;
class WorkorderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Workorder::class)->create();
    }
}
