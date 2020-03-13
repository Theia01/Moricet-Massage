<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Likes;
use App\Users;
use App\Articles;
use Faker\Generator as Faker;

$factory->define(Likes::class, function (Faker $faker) {
    return [
        'article' => Articles::all()->random()->id,
        'user' => Users::all()->random()->id,
        'value' => 1
    ];
});
