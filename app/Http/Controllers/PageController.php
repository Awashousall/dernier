<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function inscription()
    {
        return view('etudiant.create');
    }

    public function connexion()
    {
        return view('connexion');
    }

    public function deconnexion()
    {
        // Logique de déconnexion
        return redirect()->route('home');
    }

    public function showFormation()
    {
        return view('formation');
    }
    public function showForme()
    {
        return view('forme');
    }
    public function showPresentation()
    {
        return view('presentation');
    }

    
}
