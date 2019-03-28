<?php

use Illuminate\Database\Seeder;
use App\LogUnit;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(LogTableSeeder::class);
        $this->call(LogUnitSeederTable::class);
        $this->call(ComponentTableSeeder::class);
    }
}