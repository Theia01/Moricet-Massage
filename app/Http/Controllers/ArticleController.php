<?php

namespace App\Http\Controllers;
use App\Services\DatabaseService;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    public function getProducts(){
        $massages = DatabaseService::getMassages();
        return view('product', ['massages'=>$massages ] );
    }

}
