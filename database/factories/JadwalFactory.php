<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\JadwalKuliah;
use Faker\Generator as Faker;

$factory->define(JadwalKuliah::class, function (Faker $faker) {
    return [
        'kd_mata_kuliah' => $faker->text($maxNbChars = 4),
        'nama_mata_kuliah' => $faker->text($maxNbChars = 50),
        'sks' => $faker->biasedNumberBetween($min = 1, $max = 4, $function = 'sqrt'),
    ];
});
