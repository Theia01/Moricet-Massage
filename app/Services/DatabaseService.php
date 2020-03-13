<?php
namespace App\Services;

use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use App\t_log;
use App\Users;

use App\CustomClasses\Produit;

class DatabaseService {
    
    static public function getMassages(){
        $getM = DatabaseService::connecttodb()
        ->getReference('produits')
        ->getvalue(); 

        $r = response()->json($getM);
        $all_massage = $r->{'original'};

        return $all_massage;

    }

    static public function getOneMassageByName($name){
        $getM = DatabaseService::connecttodb()
        ->getReference('produits')
        ->orderByChild('nom_url')
        ->equalTo($name)
        ->getvalue(); 

        $r = response()->json($getM);
        $all_massage = $r->{'original'};

        if(sizeof($all_massage)>0){
            return array_values($all_massage)[0];
        } else {
            return null;
        }
        return $all_massage;

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
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__."/con3ctt0d8ta8bse.json",'https://coincoininsolite-1cf37.firebaseio.com/');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->create();
        $database = $firebase->getDatabase();
        return $database;
    }
    
}