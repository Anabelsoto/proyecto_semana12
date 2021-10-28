<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Doctor;
use Faker\Generator as Faker;

$factory->define(Doctor::class, function (Faker $faker) {

    return [
        'ape_nom' => $faker->word,
        'DNI' => $faker->word,
        'especialidad' => $faker->word
    ];
});
