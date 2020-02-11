<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function getProducts(id){
        return view('product', [] );
    }

}
