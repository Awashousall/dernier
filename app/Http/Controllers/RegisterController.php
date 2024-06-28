<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function form_register(){
        return view('register');
    }

    public function form_registere(){
      return view('registere');
  }

    public function form_register_post(Request $request){
        $request->validate([
          'email' => 'required|email|unique:users',
          'nom' =>'required',
          'prenom' =>'required',
          'password' => 'required',
        ]);
      
        $user = new User();
        $user->email = $request->email;
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->password =  Hash::make($request->password);
        $user->save();
        return redirect()->route('register')->with('status', 'Votre inscription a bien été prise en compte');
      
      }

      public function form_register_poste(Request $request){
        $request->validate([
          'email' => 'required|email|unique:users',
          'nom' =>'required',
          'prenom' =>'required',
          'password' => 'required',
        ]);
      
        $user = new Usere();
        $user->email = $request->email;
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->password =  Hash::make($request->password);
        $user->save();
        return redirect()->route('registere')->with('status', 'Votre inscription a bien été prise en compte');
      
      }

}
