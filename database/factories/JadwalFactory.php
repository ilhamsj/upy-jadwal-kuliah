<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\JadwalKuliah;
use Faker\Generator as Faker;

$factory->define(JadwalKuliah::class, function (Faker $faker) {
    return [
        'id_mata_kuliah' => $faker->numberBetween($min = 1, $max = 5),
        'id_dosen' => $faker->numberBetween($min = 1, $max = 5),
        'id_ruangan' => $faker->numberBetween($min = 1, $max = 5),
        'hari' => $faker->dayOfWeek($max = 'now')
    ];
});
