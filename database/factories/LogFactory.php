<?php

use Faker\Generator as Faker;

$factory->define(App\Log::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->sentence($nbWords = 4, $variableNbWords = true)
    ];
});
