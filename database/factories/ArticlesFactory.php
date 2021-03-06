<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Articles;
use App\Services\FolderService;
use App\Users;
use Faker\Generator as Faker;

$factory->define(Articles::class, function (Faker $faker) {
    return [
        'nom' => $faker->sentence(1),
        'image' => $faker->randomElement(
            FolderService::getAllBlogImage()
        ),
        'corps' => $faker->text,
        'user' => Users::all()->random()->id,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
    ];
});
