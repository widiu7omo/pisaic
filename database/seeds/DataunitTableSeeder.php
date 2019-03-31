<?php

use Illuminate\Database\Seeder;
use App\Dataunit;
class DataunitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Dataunit::class)->create();
    }
}
