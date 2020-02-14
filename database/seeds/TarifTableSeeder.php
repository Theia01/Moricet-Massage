<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TarifTableSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tarif')->insert([
            'id' => 1,
            'prix' => 50,
            'duree' => 30,
        ]);

        DB::table('massage')->insert([
            'id' => 2,
            'prix' => 90,
            'duree' => 60,
        ]);

        DB::table('massage')->insert([
            'id' => 3,
            'prix' => 100,
            'duree' => 65,
        ]);

        DB::table('massage')->insert([
            'id' => 4,
            'prix' => 120,
            'duree' => 70,
        ]);

        DB::table('massage')->insert([
            'id' => 5,
            'prix' => 70,
            'duree' => 50,
        ]);

        DB::table('massage')->insert([
            'id' => 6,
            'prix' => 90,
            'duree' => 60,
        ]);

        DB::table('massage')->insert([
            'id' => 7,
            'prix' => 40,
            'duree' => 20,
        ]);

        DB::table('massage')->insert([
            'id' => 8,
            'prix' => 70,
            'duree' => 40,
        ]);

        DB::table('massage')->insert([
            'id' => 9,
            'prix' => 50,
            'duree' => 30,
        ]);
    }
}
