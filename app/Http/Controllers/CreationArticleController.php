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
         'name' => 'required|min:2|max:255',
         'image' => 'required|max:255',
         'article' => 'required|max:100000'
         ]);

         $sendArticle = DataEloquentService::sendArticle($request);

         if($sendArticle){
            return redirect('creationArticle')->with('success', 'Article posté !');
        }else{
            return redirect('creationArticle')->with('error', 'Petit problème technique, veuillez réessayer plus tard.');
        }       
   }
}
