<?php
namespace App\Services;

use App\Massages;
use App\Techniques;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use App\t_log;
use App\Users;
use App\Articles;
use App\Commentaires;
use App\Likes;
use App\CustomClasses\Produit;

use App\Eloquent\Massage;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use DateTime;
use Auth;


class DataEloquentService {

    static public function getMassages(){
        $massages = Massages::select(Massages::ID, Massages::NOM, Massages::RESUME, Massages::IMAGE)->get();

        return $massages;

    }

    static public function getOneMassageByName($id){
        $massage = Massages::select(Massages::NOM, Massages::DESCRIPTION, Massages::PRODUITS, Massages::ALLERGIES, Massages::BIENFAITS, Massages::PRIX)->where(Massages::ID, $id)->get();

        return $massage;

    }

    static public function getTechnique($id){
        $technique = Techniques::select(Techniques::DESCRIPTION, Techniques::NOM, Techniques::TARIF, Techniques::DUREE, Techniques::ICON, Techniques::IMAGE)->where(Techniques::ID_MASSAGE, $id)->get();

        return $technique;

    }

static public function sendArticle(Request $request,$url){
        try {
            return DB::table('articles')->insert(
                ['nom' => $request->name, 'image' => $url, 'corps'=> $request->article, 'user'=> Auth::user()->id, 'created_at'=> new DateTime()]
            );

        } catch (Exception $e) {

            //report($e);
            return false;

        }

        return true;
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

    static public function getArticles(){
        $art = Articles::select(
            'articles.'.Articles::CORPS,
            'articles.'.Articles::ID,
            'articles.'.Articles::NOM,
            'articles.'.Articles::IMAGE,
            'articles.'.Articles::CREATED_AT,
            "users.".Users::NAME)->orderBy('created_at', 'DESC')
        ->leftJoin('users', 'users.id', '=', 'articles.'.Articles::USER)->paginate(6);
        return $art;
    }

    static public function getOneArticle($id){
        $art = Articles::select(
            'articles.'.Articles::CORPS,
            'articles.'.Articles::ID,
            'articles.'.Articles::NOM,
            'articles.'.Articles::IMAGE,
            'articles.'.Articles::CREATED_AT,
            "users.".Users::NAME,
            "users.".Users::AVATAR)
        ->leftJoin('users', 'users.id', '=', 'articles.'.Articles::USER)->where("articles.id",$id)->first();
        return $art;
    }

    static public function getCommentsFromArticle($id){
        $com = Commentaires::select(
            'commentaires.'.Commentaires::ID,
            'commentaires.'.Commentaires::CORPS,
            'commentaires.'.Commentaires::CREATED_AT,
            'commentaires.'.Commentaires::USER,
            "users.".Users::NAME,
            "users.".Users::AVATAR,
            "users.".Users::ROLE
        )->leftJoin('users', 'users.id', '=', 'commentaires.'.Commentaires::USER)->where("commentaires.".Commentaires::ARTICLE,$id)->get();
        return $com;
    }

    static public function getAllArticles(){
        $art = Articles::select(
            'articles.'.Articles::CORPS,
            'articles.'.Articles::ID,
            'articles.'.Articles::NOM,
            'articles.'.Articles::IMAGE,
            'articles.'.Articles::CREATED_AT,
            "users.name")
            ->leftJoin('users', 'users.id', '=', 'articles.'.Articles::USER)->get();
        return $art;
    }

    static public function deleteArticle($id){
        $art = Articles::destroy('id', $id);
        return $art;
    }

    static public function updateUser($id, $name, $email){
        try {
            
            DB::table('users')
                ->where('id', $id)
                ->update(['name' => $name, 'email' => $email]);
                
        } catch (Exception $e) {

            //report($e);
            return false;

        }
        return True;
    }

    static public function addcomment($id_article, $id_user, $message){
        try {
            DB::table('commentaires')->insert(
                ['user' => $id_user, 'article' => $id_article, 'corps'=> $message, 'created_at'=> new DateTime()]
            );  
        } catch (Exception $e) {
            //report($e);
            return false;
        }
        return True;
    }

    static public function updateAvatarUser($id, $avatar){
        try {
            
            DB::table('users')
                ->where('id', $id)
                ->update(['avatar' => $avatar]);
                
        } catch (Exception $e) {

            //report($e);
            return false;

        }
        return "ok";
    }

    static public function getLikes($id_article){
        $likeslist = Likes::select( Likes::VALUE )->where([Likes::ARTICLE => $id_article, Likes::VALUE => 1] )->get();
        $LikeCount = $likeslist->count();
        return $LikeCount;
    }

    static public function getLikeOfUserOnArticle($id_article, $id_user ){
        $likeslist = Likes::select( Likes::VALUE )->where([Likes::ARTICLE => $id_article, Likes::USER => $id_user] )->first();
        return $likeslist[Likes::VALUE];
    }

    static public function addLike($id_article, $id_user){
        DB::table('likes')->insert(
            [Likes::USER=>$id_user,Likes::ARTICLE =>$id_article, 'value'=>1]
        );
    }

    static public function updateLike($id_article, $id_user, $value){
        DB::table('likes')
        ->where( [Likes::USER => $id_user, Likes::ARTICLE => $id_article] )
        ->update(
            ['value'=>$value]
        )
        ;
    }



    static public function deleteCommentaireArticle($id){
        $commentaire = Commentaires::where('article', $id)->delete();
        return $commentaire;
    }

    static public function deleteCommentaire($id){
        $commentaires = Commentaires::where('id', $id)->delete();
        return $commentaires;
    }

    static public function getIdArticle($id){
        $id_article = Commentaires::select(Commentaires::ARTICLE)->where('id', $id)->first();
        return $id_article;
    }



}
