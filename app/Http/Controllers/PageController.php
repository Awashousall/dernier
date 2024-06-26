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



    public function showf()
    {
        return view('format');
    }
    public function showfo()
    {
        return view('form');
    }
    public function showp()
    {
        return view('presenta');
    }


    public function showfs()
    {
        return view('formats');
    }
    public function showfos()
    {
        return view('forms');
    }
    public function showps()
    {
        return view('presentas');
    }


    public function showfse()
    {
        return view('formatse');
    }
    public function showfose()
    {
        return view('formse');
    }
    public function showpse()
    {
        return view('presentase');
    }

    public function showfses()
    {
        return view('formatses');
    }
    public function showfoses()
    {
        return view('formses');
    }
    public function showpses()
    {
        return view('presentases');
    }

    
}
