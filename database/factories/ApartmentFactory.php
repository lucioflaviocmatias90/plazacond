<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Apartment;
use Faker\Generator as Faker;

$factory->define(Apartment::class, function (Faker $faker) {
    return [
        'blap' => (string) strtoupper($faker->randomLetter).'/'.$faker->randomNumber(1)
    ];
});
