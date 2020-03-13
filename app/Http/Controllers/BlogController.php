<?php

namespace App\Http\Controllers;
use App\Services\DataEloquentService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Route;
use Auth;

class BlogController extends Controller
{
    public function getArticles(){
        $art = DataEloquentService::getArticles();
        return view('article', ['articles'=>$art ] );
    }

    public function showArticle(){
        $id = Route::current()->parameter('id');
        $art = DataEloquentService::getOneArticle($id);
        $comments = DataEloquentService::getCommentsFromArticle($id);
        $likes = DataEloquentService::getLikes($id);

        $user_like = null;
        if( !empty(Auth::user())  ){            
            $id_user = Auth::user()->id;
            $user_like = DataEloquentService::getLikeOfUserOnArticle($id,$id_user);
        }

        if($art == NULL){ //si l'utilisateur demande un article qui n'existe pas
            return view('errors.404');
        }else{
            return view('one_article', ['article'=>$art,'commentaires'=>$comments,'likes'=>$likes,'user_like' => $user_like ] );
        }
    }

    public function addComment(Request $request){
        $id_article = $request->id_article;

        //vérification de l'existence de l'article
        $art = DataEloquentService::getOneArticle($id_article);
        if($art == NULL){
            return view('errors.404');
        }

        $this->validate($request, [
                'message' => 'required|max:1000'
            ]);

        $addcomment = DataEloquentService::addcomment($id_article, Auth::user()->id, $request->message);

        if($addcomment){
            return redirect('/articles/'.$id_article);
        }else{
            return redirect('/articles/'.$id_article)->with('error', 'Petit problème technique, veuillez réessayer plus tard.');
        }
    }

    public function deleteCommentaire(){
        $id = Route::current()->parameter('id');
        $id_article = DataEloquentService::getIdArticle($id);
        DataEloquentService::deleteCommentaire($id);
        return redirect('/articles/'.$id_article->article);
    }

    public function likeArticle(){
        $id_article = Route::current()->parameter('id');
        $id_user = Auth::user()->id;

        $user_like = DataEloquentService::getLikeOfUserOnArticle($id,$id_user);

        if( is_null($user_like) ){
            DataEloquentService::addLike($id_article,$id_user);
        } else {
            if($user_like == 0){
                DataEloquentService::updateLike($id_article,$id_user,1);
            } else {
                DataEloquentService::updateLike($id_article,$id_user,0);
            }
        }

        return redirect('/articles/'.$id_article);

        
    }

}
