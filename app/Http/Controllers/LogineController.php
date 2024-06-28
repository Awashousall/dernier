<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogineController extends Controller
{
    public function form_logine()
    {
        return view('logine'); 
    }

    public function form_login_poste(Request $request){
        $auth =  $request->validate([
            'email' =>'required|email',
            'password' => 'Required'
        ]);
          
        if(Auth::attempt($auth))
        $request->session()->regenerate();

            return redirect()->intended('universite');
    }
}
