<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cita;
use Faker\Generator as Faker;

$factory->define(Cita::class, function (Faker $faker) {

    return [
        'id_paciente' => $faker->randomDigitNotNull,
        'fecha_cita' => $faker->date('Y-m-d H:i:s'),
        'id_doctor' => $faker->randomDigitNotNull
    ];
});
