<?php

namespace App\Http\Controllers;
use App\Services\DataEloquentService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Route;
class BlogController extends Controller
{
    public function getArticles(){
        $art = DataEloquentService::getArticles();
        return view('article', ['articles'=>$art ] );
    }

    public function showArticle(){
        $id = Route::current()->parameter('id');
        $art = DataEloquentService::getOneArticle($id);
        return view('one_article', ['article'=>$art ] );
    }

}
