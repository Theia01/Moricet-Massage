<?php

namespace App\Http\Controllers;

use App\Services\SendMailService;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function show()
   {
       return view('contact');
   }

   public function send(Request $request)
   {
        $this->validate($request, [
         'name' => 'required|min:2|max:30',
         'email' => 'required|email:filter',
         'message' => 'required|max:1000'
         ]);

         $checkMail = SendMailService::mailDemandeContact($request);

         if($checkMail){
            return redirect('contact')->with('success', 'Mail envoyé !');
        }else{
            return redirect('contact')->with('error', 'Petit problème technique, veuillez réessayer plus tard.');
        }       
   }
}
