<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected function authenticated(Request $request, $user)
    {
        // Check if the authenticated user is 'awasall@esp.sn'
        if ($user->email === 'awasall@esp.sn') {
            return redirect()->route('sall'); // Redirige vers la page 'sall'
        } elseif ($user->isAdmin()) {
            return redirect()->route('admin.dashboard'); // Redirige vers le tableau de bord de l'administrateur
        } else {
            return redirect()->intended('dashboard'); // Redirige vers le tableau de bord par défaut
        }
    }

    public function form_login()
    {
        return view('login'); 
    }

    public function form_login_post(Request $request)
    {
        $credentials = $request->validate([
            'email' =>'required|email',
            'password' => 'required'
        ]);
          
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
