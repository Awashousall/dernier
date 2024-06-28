<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Etudiant;

class DashboardeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user) {
            $email = strtolower($user->email);

            if ($email === 'unipro@edu.sn') {
                return redirect()->route('dashboarde.unipro');
            } elseif ($email === 'hemi@edu.sn') {
                return redirect()->route('dashboarde.hemi');
            }
        }
        return view('welcome'); // Vue d'accueil par défaut
    }

    public function uniproDashboard()
    {
        $etudiants = Etudiant::where('universite', 'unipro')->get();
        return view('dashboarde.unipro', ['etudiants' => $etudiants]);
    }

    public function hemiDashboard()
    {
        $etudiants = Etudiant::where('universite', 'hemi')->get();
        return view('dashboarde.hemi', ['etudiants' => $etudiants]);
    }
}
