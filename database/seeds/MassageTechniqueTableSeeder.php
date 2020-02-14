<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MassageTechniqueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('massage_technique')->insert([
            'id_massage'=> 1,
            'id_technique'=> 1,
        ]);

        DB::table('massage_technique')->insert([
            'id_massage'=> 1,
            'id_technique'=> 2,
        ]);

        DB::table('massage_technique')->insert([
            'id_massage'=> 1,
            'id_technique'=> 3,
        ]);



        DB::table('massage_technique')->insert([
            'id_massage'=>2,
            'id_technique'=>1,
        ]);

        DB::table('massage_technique')->insert([
            'id_massage'=>2,
            'id_technique'=>2,
        ]);

        DB::table('massage_technique')->insert([
            'id_massage'=>2,
            'id_technique'=>3,
        ]);



        DB::table('massage_technique')->insert([
            'id_massage'=>3,
            'id_technique'=>1,
        ]);

        DB::table('massage_technique')->insert([
            'id_massage'=>3,
            'id_technique'=>2,
        ]);

        DB::table('massage_technique')->insert([
            'id_massage'=>3,
            'id_technique'=>1,
        ]);
    }
}
