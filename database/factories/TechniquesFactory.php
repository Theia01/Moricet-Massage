<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Massages;
use App\Services\FolderService;
use App\Techniques;
use Faker\Generator as Faker;

$factory->define(Techniques::class, function (Faker $faker) {
    return [
        'nom' => $faker->sentence(2),
        'description' => $faker->text,
        'image' => $faker->randomElement(
            FolderService::getAllTechniqueImage()
        ),
        'icon' => $faker->randomElement(
            FolderService::getAllTechniqueIcon()
        ),
        'tarif' => $faker->numberBetween(10, 90),
        'duree' => $faker->numberBetween(10, 200),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'massages_id' => Massages::all()->random()->id,
    ];
});
