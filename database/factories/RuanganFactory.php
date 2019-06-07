<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Ruangan;
use Faker\Generator as Faker;

$factory->define(Ruangan::class, function (Faker $faker) {
    return [
        'kd_ruangan' => $faker->text($maxNbCars = 5),
        'nama_ruangan' => $faker->streetName
    ];
});
