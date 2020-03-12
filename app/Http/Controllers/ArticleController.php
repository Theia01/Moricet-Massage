<?php

namespace App\Http\Controllers;
use App\Services\DatabaseService;
use App\Services\DataEloquentService;
use App\Services\DataJsonService;
use Illuminate\Http\Request;
use Route;

class ArticleController extends Controller
{
    public function getProducts(){
        $massages = DataEloquentService::getMassages();
        return view('product', ['massages'=>$massages ] );
    }

    public function showProduct(){
        $name = Route::current()->parameter('name');
        $massage = DataEloquentService::getOneMassageByName($name );
        $technique = DataEloquentService::getTechnique($name );
        return view('one_product', ['technique'=>$technique, 'massage'=>$massage ] );
    }

}
