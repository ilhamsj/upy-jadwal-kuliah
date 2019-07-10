<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Dosen;
use Faker\Generator as Faker;

$factory->define(Dosen::class, function (Faker $faker) {
    return [
        'kd_dosen' => $faker->safeColorName,
        'nama_dosen' => $faker->name
    ];
});
