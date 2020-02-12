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

class DatabaseService {
    
    static public function test(){
    
       
        $newPost = DatabaseService::connecttodb()
        ->getReference('produits')
        ->push([
        'title' => 'Post title',
        'body' => 'This should probably be longer.'
        ]);
        //$newPost->getKey(); // => -KVr5eu8gcTv7_AHb-3-
        //$newPost->getUri(); // => https://my-project.firebaseio.com/blog/posts/-KVr5eu8gcTv7_AHb-3-
        //$newPost->getChild('title')->set('Changed post title');
        //$newPost->getValue(); // Fetches the data from the realtime database
        //$newPost->remove();
        echo"<pre>";
        print_r($newPost->getvalue());

        return "Test numéro 1";
    }

    static public function testget(){
    
       
        $createPost = DatabaseService::connecttodb()
        ->getReference('blog/posts')
        ->getvalue();      
        $valret = response()->json($createPost);

        $date_jour = $valret->{'original'};
        //var_dump($date_jour);

        foreach ($date_jour as $key => $value){
            var_dump($date_jour[$key] );
            var_dump($value);
            echo '<br><br><br>'; 
        }

        die;
        return response()->json($createPost);
    }


    static public function getMassages(){
        
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