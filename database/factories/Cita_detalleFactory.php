<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cita_detalle;
use Faker\Generator as Faker;

$factory->define(Cita_detalle::class, function (Faker $faker) {

    return [
        'idcita' => $faker->randomDigitNotNull
    ];
});
