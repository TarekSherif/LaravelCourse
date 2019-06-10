<?php

$factory->define(App\Voluntarydegree::class, function (Faker\Generator $faker) {
    return [
        "title" => $faker->name,
    ];
});
