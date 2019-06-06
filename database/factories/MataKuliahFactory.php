<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\MataKuliah;
use Faker\Generator as Faker;

$factory->define(MataKuliah::class, function (Faker $faker) {
    return [
        'kd_mata_kuliah' => $faker->text($maxNbChars = 5),
        'nama_mata_kuliah' => $faker->text($minNbChars = 10, $maxNbChars = 15),
        'sks' => $faker->biasedNumberBetween($min = 1, $max = 4, $function = 'sqrt'),
    ];
});
