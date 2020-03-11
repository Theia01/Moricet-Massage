<?php

namespace App\Http\Controllers;
use App\Services\DataEloquentService;
use Illuminate\Http\Request;

class CreationArticleController extends Controller
{
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function show()
   {
       return view('creationArticle');
   }

   public function send(Request $request)
   {
        $this->validate($request, [
         'name' => 'required|min:2|max:30',
         'image' => 'required|max:255',
         'article' => 'required|max:10000'
         ]);

         $sendArticle = DataEloquentService::sendArticle($request);

         if($sendArticle){
            return redirect('contact')->with('success', 'Article posté !');
        }else{
            return redirect('contact')->with('error', 'Petit problème technique, veuillez réessayer plus tard.');
        }       
   }
}
