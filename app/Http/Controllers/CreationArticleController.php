<?php

namespace App\Http\Controllers;
use App\Services\DataEloquentService;
use Illuminate\Http\Request;
use Auth;
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
         'image' => 'image',
         'article' => 'required|max:100000'
         ]);

         if( request()->hasFile('avatar') ){
            $avatar = Auth::user()->id.'-'.request()->file('avatar')->getClientOriginalName().".".request()->file('avatar')->getClientOriginalExtension();
            $article_picture = 'uploads/images/article/'.$avatar;
            request()->file('avatar')->storeAs('images/article',$avatar,"my_upload");
            //$user->update(['avatar'=>$avatar_picture]);
        } 

         $sendArticle = DataEloquentService::sendArticle($request,$article_picture);

        

         if($sendArticle){
            return redirect('creationArticle')->with('success', 'Article posté !');
        }else{
            return redirect('creationArticle')->with('error', 'Petit problème technique, veuillez réessayer plus tard.');
        }       
   }
}
