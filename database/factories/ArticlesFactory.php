<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Articles;
use Faker\Generator as Faker;

$factory->define(Articles::class, function (Faker $faker) {
    return [
        'nom' => $faker->sentence(1),
        'image' => $faker->text,
        'corps' => $faker->text,
        'user' => 1,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
    ];
});
