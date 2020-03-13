<?php

namespace App\Http\Controllers;

use App\Services\DataEloquentService;
use App\Users;
use Illuminate\Support\Facades\DB;
use Route;

class AdminController extends Controller
{
    public function getArticle(){

        $art = DataEloquentService::getAllArticles();
        return view('admin', ['article'=>$art ] );
    }


    public function deleteArticle()
    {
        $id = Route::current()->parameter('id');
        DataEloquentService::deleteCommentaireArticle($id);
        DataEloquentService::deleteArticle($id);
        $art = DataEloquentService::getAllArticles();
        return view('admin', ['article'=>$art ] );
    }

}
