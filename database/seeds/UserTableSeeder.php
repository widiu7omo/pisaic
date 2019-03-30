<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'=>"Admin",
            'username'=>'ADMIN',
            'password'=>Hash::make('secret'),
            'email'=>'admin@ut.com'
        ]);
        User::create([
            'name'=>"Teknisi",
            'username'=>'TEKNIS',
            'password'=>Hash::make('secret'),
            'email'=>'teknisi@ut.com'
        ]);
        User::create([
            'name'=>"Mandor",
            'username'=>'MANDOR',
            'password'=>Hash::make('secret'),
            'email'=>'mandor@ut.com'
        ]);

    }
}
