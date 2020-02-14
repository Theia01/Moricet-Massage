<?php

namespace App\Http\Controllers;
use App\Services\DatabaseService;
use App\Services\DataJsonService;
use Illuminate\Http\Request;
use Route;

class ArticleController extends Controller
{
    public function getProducts(){
        $massages = DataJsonService::getMassages();
        return view('product', ['massages'=>$massages ] );
    }

    public function showProduct(){
        $name = Route::current()->parameter('name');
        $massage = DataJsonService::getOneMassageByName($name );
        return view('one_product', ['massage'=>$massage ] );
    }

}
