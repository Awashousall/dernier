<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant; 

class HomeController extends Controller
{
    public function index()
    {
        // Exemple de récupération des étudiants depuis la base de données
        $etudiants = Etudiant::all(); // Vous devez adapter cette ligne à votre modèle Etudiant et à votre logique de récupération
        return view('universite', ['etudiants' => $etudiants]);
    }
    
}