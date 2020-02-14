<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use App\Mail\ConfirmationContact;

class SendMailService {

    /**
    * Envoie la demande utilisateur à l'administrateur et si tout va bien envoie aussi à l'utilisateur.
    *
    * @param \Illuminate\Http\Request $request
    *
    * @return bool
    */
    static public function mailDemandeContact(Request $request){
        try {

            Mail::to('moricet-massage@gmail.com')
            ->send(new Contact($request->only(['name', 'email', 'message'])));

        } catch (Exception $e) {

            //report($e);
            return false;

        }

        Mail::to($request->email)
        ->send(new ConfirmationContact($request->only(['name', 'email', 'message'])));

        return true;
    }
}
