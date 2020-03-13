<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Massages;
use App\Services\FolderService;
use Faker\Generator as Faker;

$factory->define(Massages::class, function (Faker $faker) {
    return [
        'nom' => $faker->sentence(1),
        'prix' => $faker->numberBetween(10, 30),
        'resume' => $faker->text,
        'image' => $faker->randomElement(
            FolderService::getAllMassageImage()
        ),
        'produits' => $faker->sentence(2),
        'description' => $faker->text,
        'bienfaits' => $faker->text,
        'allergies' => $faker->text,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
    ];
});
