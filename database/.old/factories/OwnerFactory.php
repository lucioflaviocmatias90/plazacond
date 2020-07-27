<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Owner::class, function (Faker $faker) {

	$condition = array('residindo', 'alugado', 'vende-se', 'aluga-se', 'vazio');

	$gender = array('masculino', 'feminino');

    return [
    	'blap' => $faker->randomLetter. '/' .$faker->randomDigitNotNull, // A/12
        'fullname' => $faker->name,
        'condition' => $faker->randomElement($condition), // 'residindo';
        'birthday' => $faker->date('Y-m-d', 'now'), // '1979-06-09',
        'email' => $faker->unique()->freeEmail,
        'gender' => $faker->randomElement($gender), // 'masculino',
        'phone' => $faker->phoneNumber
    ];
});
