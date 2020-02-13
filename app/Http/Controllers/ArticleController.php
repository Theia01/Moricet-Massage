<?php

namespace App\Http\Controllers;
use App\Services\DatabaseService;
use Illuminate\Http\Request;
use Route;

class ArticleController extends Controller
{
    public function getProducts(){
        $massages = DatabaseService::getMassages();
        return view('product', ['massages'=>$massages ] );
    }

    public function showProduct(){
        $name = Route::current()->parameter('name');
        $massage = DatabaseService::getOneMassageByName(str_replace("-"," ",$name) );
        return view('one_product', ['massage'=>$massage ] );
    }

}
