<?php


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
            'prix' => 50,
            'duree' => 30,
        ]);

        DB::table('massage')->insert([
            'prix' => 90,
            'duree' => 60,
        ]);

        DB::table('massage')->insert([
            'prix' => 100,
            'duree' => 65,
        ]);

        DB::table('massage')->insert([
            'prix' => 120,
            'duree' => 70,
        ]);

        DB::table('massage')->insert([
            'prix' => 70,
            'duree' => 50,
        ]);

        DB::table('massage')->insert([
            'prix' => 90,
            'duree' => 60,
        ]);

        DB::table('massage')->insert([
            'prix' => 40,
            'duree' => 20,
        ]);

        DB::table('massage')->insert([
            'prix' => 70,
            'duree' => 40,
        ]);

        DB::table('massage')->insert([
            'prix' => 50,
            'duree' => 30,
        ]);
    }
}
