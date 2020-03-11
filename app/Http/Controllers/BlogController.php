<?php

namespace App\Http\Controllers;
use App\Services\DataEloquentService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function getArticles(){
        $art = DataEloquentService::getArticles();
        return view('article', ['articles'=>$art ] );
    }

}
