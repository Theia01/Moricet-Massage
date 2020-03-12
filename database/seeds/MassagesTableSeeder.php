<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class MassagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Massages::class, 8)->create()->each(function ($massage) {
            $massage->massages()->saveMany(factory(App\Techniques::class, 3)->make());
        });
    }
}
