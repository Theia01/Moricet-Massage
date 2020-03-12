<?php

namespace App\Http\Controllers;

use App\Services\DataEloquentService;
use Illuminate\Http\Request;
use Auth;

class ProfilController extends Controller
{
    public function show(){
        return view('profil');
    }

    public function update(Request $request){
        $this->validate($request, [
            'name' => 'required|min:2|max:30',
            'email' => 'required|email:filter'
            ]);

        $updateUser = DataEloquentService::updateUser(Auth::user()->id, $request->name, $request->email);

        if($updateUser){
            return redirect('profil')->with('success', 'Modification du profil enregistrés !');
        }else{
            return redirect('profil')->with('error', 'Petit problème technique, veuillez réessayer plus tard.');
        } 
            
    }
}
