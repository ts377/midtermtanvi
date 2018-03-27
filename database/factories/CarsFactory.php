<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement(['ford','toyota','honda']),
        'model' => $faker->randomLetter,
        'year' => $faker->numberBetween(2000,2018),
    ];
});
