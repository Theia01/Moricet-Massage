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
         'email' => 'required|email',
         'message' => 'required|max:1000'
         ]);

         Mail::to('moricet-massage@gmail.com')
            ->send(new Contact($request->except('_token')));

        Mail::to($request->email)
            ->send(new ConfirmationContact($request->except('_token')));

        return redirect()->route("contact");
   }
}
