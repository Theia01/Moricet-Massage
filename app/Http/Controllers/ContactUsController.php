<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use App\Mail\ConfirmationContact;

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

        try {
            Mail::to('moricet-massage@gmail.com')
            ->send(new Contact($request->only(['name', 'email', 'message'])));
        } catch (Exception $e) {
            //report($e);
            return redirect('contact')->with('error', 'Petit problème technique, veuillez réessayer plus tard.');
        }  

        Mail::to($request->email)
            ->send(new ConfirmationContact($request->only(['name', 'email', 'message'])));

        return redirect('contact')->with('success', 'Mail envoyé !');
   }
}
