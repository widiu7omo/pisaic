<?php

use Faker\Generator as Faker;

$factory->define(App\Workorder::class, function (Faker $faker) {
    return [
        //
        'date'=>$faker->date($format='d-m-Y'),
        'wo_no'=>$faker->numerify('WO###'),
        'revisi_sr'=>$faker->numerify('rev###'),
        'po_cus'=>$faker->numerify('SN###'),
        'product_name'=>$faker->lexify('PROD ???'),
        'model_unit'=>$faker->numerify('SN###'),
        'model_engine'=>$faker->numerify('SN###'),
        'estimasi_job'=>$faker->randomDigitNotNull,
        'sdh_name'=>$faker->name,
        'logunit_id'=>1,
        'unit_id'=>1,
        'component_id'=>1
    ];
});
