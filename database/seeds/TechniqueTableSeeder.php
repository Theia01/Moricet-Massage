<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TechniqueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    DB::table('technique')->insert([
        'id' => 1,
        'nom' => 'Massage Hawaïen',
        'description' => 'Massage avec un collier de fleurs et une jupe banane',
        'image' => 'callifornien.jpg',
        'icon' => 'oil.png',
    ]);

    DB::table('technique')->insert([
        'id' => 2,
        'nom' => 'Massage Shiatsu',
        'description' => 'C’est une technique japonaise qui permet de soigner les zones douloureuses par le biais d’une simple pression des doigts au niveau de certains points du corps.',
        'image' => 'le-massage-shiatsu.jpg',
        'icon' => 'oil.png',
    ]);

    DB::table('technique')->insert([
        'id' => 3,
        'nom' => 'Massage Californien',
        'description' => 'Ce type de massage utilise effectivement un produit de massage et parfois des huiles essentielles.',
        'image' => 'Le-massage-suédois.jpg',
        'icon' => 'oil.png',
    ]);
    }
}
