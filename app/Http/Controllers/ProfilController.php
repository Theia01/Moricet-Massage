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
        
        if( request()->hasFile('avatar') ){
            $avatar = Auth::user()->id.'-'.request()->file('avatar')->getClientOriginalName().".".request()->file('avatar')->getClientOriginalExtension();
            $avatar_picture = 'uploads/images/avatar/'.$avatar;
            request()->file('avatar')->storeAs('images/avatar',$avatar,"my_upload");
            //$user->update(['avatar'=>$avatar_picture]);
            DataEloquentService::updateAvatarUser(Auth::user()->id,$avatar_picture);
        } 

        $updateUser = DataEloquentService::updateUser(Auth::user()->id, $request->name, $request->email);
        

        if($updateUser){
            return redirect('profil')->with('success', 'Modification du profil enregistrés !');
        } else {
            return redirect('profil')->with('error', 'Petit problème technique, veuillez réessayer plus tard.');
        } 
            
    }
}
