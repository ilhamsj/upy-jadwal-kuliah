<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

// use App\Dosen;
use Faker\Generator as Faker;

$factory->define(Dosen::class, function (Faker $faker) {
    return [
        'kd_dosen' => $faker->text($maxNbChars = 5),
        'nama_dosen' => $faker->name
    ];
});
