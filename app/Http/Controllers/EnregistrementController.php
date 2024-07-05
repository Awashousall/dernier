<?php

namespace App\Http\Controllers\Auth;

use App\Models\Userrrr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class EnregistrementController extends Controller
{
    /**
     * Affiche le formulaire d'enregistrement.
     *
     * @return \Illuminate\View\View
     */
    public function showEnregistrementForm()
    {
        return view('auth.enregistrement');
    }

    /**
     * Gère la soumission du formulaire d'enregistrement.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function enregistrer(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:userrrrs',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Création d'un nouvel utilisateur
        $user = Userrrr::create([
            'nom' => $validatedData['nom'],
            'prenom' => $validatedData['prenom'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Authentification de l'utilisateur après l'enregistrement (facultatif)
        // auth()->login($user);

        // Redirection vers une page après l'enregistrement
        return redirect()->route('home')->with('success', 'Votre compte a été créé avec succès !');
    }
}
