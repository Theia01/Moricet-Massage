<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Commentaires;
use Faker\Generator as Faker;

$factory->define(Commentaires::class, function (Faker $faker) {
    return [
        'article' => function() {
            return factory(App\Articles::class)->create()->id;
        },
        'corps' => $faker->text,
        'user' => function() {
            return factory(App\Users::class)->create()->id;
        },
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
    ];
});
