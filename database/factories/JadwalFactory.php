<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\JadwalKuliah;
use Faker\Generator as Faker;

$factory->define(JadwalKuliah::class, function (Faker $faker) {
    return [
        'id_mata_kuliah' => $faker->numberBetween($min = 4, $max = 10)
    ];
});
