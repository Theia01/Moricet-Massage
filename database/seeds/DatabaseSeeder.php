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
            MassagesTableSeeder::class,
            TechniquesTableSeeder::class,
            UsersTableSeeder::class,
            ArticlesTableSeeder::class,
            CommentairesTableSeeder::class
        ]);
    }
}
