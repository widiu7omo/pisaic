<?php

use Faker\Generator as Faker;

$factory->define(App\Dataunit::class, function (Faker $faker) {
    return [
        //
        'date'=>$faker->date($format='d-m-Y'),
        'location'=>$faker->city,
        'sn_unit'=>$faker->numerify('SN###'),
        'smr_uni'=>$faker->numerify('SMR###'),
        'smr_travel'=>$faker->numerify('SMRTR###'),
        'kwh_meter'=>$faker->numerify('KWH###'),
        'inspect_start'=>$faker->time,
        'inspect_end'=>$faker->time,
        'operator_name'=>$faker->name,
        'tanggal_teknisi_tiba'=>$faker->date($format='d-m-Y'),
        'tanggal_teknisi_meninggalkan'=>$faker->date($format='d-m-Y'),
        'tanggal_teknisi_selesai'=>$faker->date($format='d-m-Y'),
        'hasil_pekerjaan_teknisi_selesai'=>'Selesai',
        'hasil_pekerjaan_teknisi_memuaskan'=>'Memuaskan',
        'penilaian_teknisi'=>'Baik',
        'mekanik_name'=>$faker->name,
        'mekanik_leader_name'=>$faker->name,
        'supervisor_name'=>$faker->name,
        'logunit_id'=>1,
        'unit_id'=>1,
        'component_id'=>2
    ];
});
