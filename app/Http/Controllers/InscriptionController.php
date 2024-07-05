<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userss; // Assurez-vous d'importer correctement le modèle Userss

class InscriptionController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.inscription'); // Vue pour le formulaire d'inscription
    }

    public function register(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:userss',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Création de l'utilisateur
        $user = Userss::create([
            'nom' => $validatedData['nom'],
            'prenom' => $validatedData['prenom'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Optionnel : Authentifier l'utilisateur après l'inscription
        // auth()->login($user);

        return redirect('/')->with('success', 'Inscription réussie !');
    }
}
