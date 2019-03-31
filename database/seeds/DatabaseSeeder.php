<?php

use Illuminate\Database\Seeder;
use App\LogUnit;
use App\InspectCamera;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        #Main Data
        $this->call(UserTableSeeder::class);
        $this->call(UnitTableSeeder::class);
        // $this->call(LogUnitSeederTable::class);
        #Master Data
        $this->call(MasterlogSeedTable::class);
        // $this->call(ComponentTableSeeder::class);
        // $this->call(SubcomponentSeederTable::class);
        #Component
        $this->call(InspectCameraTableSeeder::class);
        $this->call(PisheetTableSeeder::class);
        #Data Component
        $this->call(WorkorderTableSeeder::class);
        $this->call(DataunitTableSeeder::class);
    }
}
