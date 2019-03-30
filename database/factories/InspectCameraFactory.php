<?php

use Faker\Generator as Faker;
use App\Unit;
$factory->define(App\InspectCamera::class, function (Faker $faker) {
    return [
        //
        'pemeriksa'=>$faker->name,
        'tanggal_pemeriksaan'=>$faker->date($format="d-m-Y"),
        'nama_komponen'=>$faker->word,
        'logunit_id'=>2,
        'unit_id'=>$faker->numberBetween($min=1,$max=6)
    ];
});
