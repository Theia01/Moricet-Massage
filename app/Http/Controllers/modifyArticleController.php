<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DataEloquentService;
use Route;


class modifyArticleController extends Controller
{
    public function show()
   {
        $id = Route::current()->parameter('id');
        $art = DataEloquentService::getOneArticle($id);
        if($art == NULL){ //si l'admin demande un article qui n'existe pas
            return view('errors.404');
        }else{
            return view('modifyArticle', ['article'=>$art] );
        }
   }
}
