<?php
namespace App\Services;

use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use App\t_log;
use App\User;
use App\CustomClasses\Produit;

use App\Eloquent\Massage;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DataEloquentService {
    
    static public function getMassages(){
        $r = DB::table('massage')->select("nom","nom_url","resume","image")->get();
        $one_less = json_decode(json_encode($r), true);;
      
        return $one_less;
        

    }



    static public function getOneMassageByName($name){
    
    }


    static public function insertProduct(){
    
       
        $newPost = DatabaseService::connecttodb()
        ->getReference('produits')
        /*->push([
            
            "nom" => "Massage au Miel",
            "prix" => 35,
            "resume" => "Un massage délicat à base de miel bio",
            "image" => "image_random.png",
            "techniques" => [
                "massage1" => [
                "nom" => "Massage Hawaïen",
                "description" => "Massage avec un collier de fleurs et une jupe banane",
                "image" => "image_random2.png",
                "prix" => [
                        "tarif1" => [
                            "tarif" => 50,
                            "durée" => 30
                        ],
                        "tarif2" => [
                            "tarif" => 90,
                            "durée" => 60
                        ],
                        "tarif3" => [
                            "tarif" => 420,
                            "durée" => 300
                        ]
                    ]
                ]
            ],
            "produits " => "Miel",
            "description" => "Flemme",
            "bienfaits" => "Tout plein partout",
            "allergies" => "Les allergies c'est pour les faibles"

    ]); */;

        //$newPost->getKey(); // => -KVr5eu8gcTv7_AHb-3-
        //$newPost->getUri(); // => https://my-project.firebaseio.com/blog/posts/-KVr5eu8gcTv7_AHb-3-
        //$newPost->getChild('title')->set('Changed post title');
        //$newPost->getValue(); // Fetches the data from the realtime database
        //$newPost->remove();
        echo"<pre>";
        print_r($newPost->getvalue());

        return "Test numéro 1";
    }



    static public function connecttodb(){
        Schema::create('massage', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->float('price');
            $table->timestamps();
        });
        var_dump();
        die;
    }
    
}