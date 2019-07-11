<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Kelas;
use Faker\Generator as Faker;

$factory->define(Kelas::class, function (Faker $faker) {
    return [
        'kd_kelas' => $faker->text($maxNbCars = 5),
        'nama_kelas' => $faker->tld,
    ];
});
