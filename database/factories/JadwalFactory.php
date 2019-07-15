<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\JadwalKuliah;
use Faker\Generator as Faker;

$factory->define(JadwalKuliah::class, function (Faker $faker) {
    return [
        'id_mata_kuliah' => $faker->numberBetween($min = 1, $max = 10),
        'id_dosen' => $faker->numberBetween($min = 1, $max = 10),
        'id_ruangan' => $faker->numberBetween($min = 1, $max = 10),
        'id_kelas' => $faker->numberBetween($min = 1, $max = 10),
        'hari' => $faker->dayOfWeek($max = 'now'),
        'pukul' => $faker->time($format = 'H:i:s', $max = 'now'),
    ];
});
