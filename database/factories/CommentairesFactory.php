<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Commentaires;
use App\Users;
use App\Articles;
use Faker\Generator as Faker;

$factory->define(Commentaires::class, function (Faker $faker) {
    return [
        'article' => Articles::all()->random()->id,
        'corps' => $faker->text,
        'user' => Users::all()->random()->id,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
    ];
});
