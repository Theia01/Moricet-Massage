<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TechniquesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Techniques::class, 9)->create()->each(function ($techniques) {
            $techniques->massages()->save(factory(App\Massages::class)->make());
        });
    }
}
