<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogineeeController extends Controller
{
    public function showLoginForm()
    {
        return view('autre-nom'); // Assurez-vous de remplacer 'autre-nom' par le nom de votre vue de formulaire
    }

    public function autreMethodeLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::guard('etudiants')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('sall'); // Assurez-vous que 'sall' est la route ou l'URL de destination après la connexion
        }
    
        return back()->withErrors([
            'email' => 'Les identifiants fournis ne correspondent pas à nos enregistrements.',
        ]);
    }
}
    
