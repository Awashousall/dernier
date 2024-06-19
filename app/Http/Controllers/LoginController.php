<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function form_login()
    {
        return view('login'); 
    }

    public function form_login_post(Request $request){
        $auth =  $request->validate([
            'email' =>'required|email',
            'password' => 'Required'
        ]);
          
        if(Auth::attempt($auth))
        $request->session()->regenerate();

            return redirect()->intended('dashboard');
    }
}
