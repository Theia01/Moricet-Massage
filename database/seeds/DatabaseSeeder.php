<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            MassageTableSeeder::class,
            TarifTableSeeder::class,
            TechniqueTableSeeder::class,
            TechniqueTarifTableSeeder::class,
            MassageTechniqueTableSeeder::class,
            UsersTableSeeder::class,
            ArticlesTableSeeder::class,
            CommentairesTableSeeder::class
        ]);
    }
}
