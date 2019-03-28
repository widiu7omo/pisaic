<?php

use Faker\Generator as Faker;
use App\Log;

$factory->define(App\Component::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->sentence($nbWords = 4, $variableNbWords = true),
        'id_log'=>factory(Log::class)->create()->id,
    ];
});
