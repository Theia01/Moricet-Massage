<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Users::class, 10)->create()->each(function ($user) {
            $user->articles()->saveMany(factory(App\Articles::class, random_int(0,2) )->create()->each(function ($article) {
                    $article->comments()->saveMany( factory(App\Commentaires::class, random_int(0,5)) )->create();
                })
            );
        });
    }
}
