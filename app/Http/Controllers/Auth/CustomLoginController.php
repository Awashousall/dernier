<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Assurez-vous que 'auth.login' correspond à votre vue personnalisée
    }

    public function logine(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Tentative d'authentification de l'utilisateur
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication réussie, rediriger l'utilisateur
            return redirect()->route('sall');
        } else {
            // Authentication échouée, rediriger avec message d'erreur
            return back()->withErrors(['email' => 'Les informations d\'identification fournies sont incorrectes.']);
        }
    }
}
