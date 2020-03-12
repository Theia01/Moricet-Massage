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
        $id = Route::current()->parameter('id');
        $massage = DataEloquentService::getOneMassageByName($id);
        $technique = DataEloquentService::getTechnique($id);
        return view('one_product', ['technique'=>$technique, 'massage'=>$massage] );
    }

}
