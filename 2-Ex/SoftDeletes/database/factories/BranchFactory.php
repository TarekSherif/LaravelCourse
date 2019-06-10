<?php

$factory->define(App\Branch::class, function (Faker\Generator $faker) {
    return [
        "branch" => $faker->name,
        "address" => $faker->name,
        "phone" => $faker->name,
        "email" => $faker->name,
        "fb" => $faker->name,
        "wb" => $faker->name,
    ];
});
