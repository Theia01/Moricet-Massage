<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechniqueTarifTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('technique_tarif')->insert([
            'id_technique' => 1,
            'id_tarif' => 1,
        ]);

        DB::table('technique_tarif')->insert([
            'id_technique' => 1,
            'id_tarif' => 2,
        ]);

        DB::table('technique_tarif')->insert([
            'id_technique' => 1,
            'id_tarif' => 3,
        ]);

        DB::table('technique_tarif')->insert([
            'id_technique' => 2,
            'id_tarif' => 1,
        ]);

        DB::table('technique_tarif')->insert([
            'id_technique' => 2,
            'id_tarif' => 2,
        ]);

        DB::table('technique_tarif')->insert([
            'id_technique' => 2,
            'id_tarif' => 3,
        ]);

        DB::table('technique_tarif')->insert([
            'id_technique' => 3,
            'id_tarif' => 1,
        ]);

        DB::table('technique_tarif')->insert([
            'id_technique' => 3,
            'id_tarif' => 2,
        ]);

        DB::table('technique_tarif')->insert([
            'id_technique' => 3,
            'id_tarif' => 3,
        ]);
    }
}
