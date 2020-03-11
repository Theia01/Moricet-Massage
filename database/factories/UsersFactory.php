<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

 use App\Users;
 use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Users::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'password' => $faker->password,
        'pseudo' => $faker->sentence(1),
        'role' => $faker->numberBetween(0, 1),
        'avatar' => $faker->text,
        'active' => $faker->boolean,
        'deleted_at' => null,
    ];
});
