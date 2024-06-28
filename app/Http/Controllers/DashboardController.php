<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class DashboardController extends Controller
{
    public function handleAction(Request $request)
    {
        $action = $request->input('action');

        if ($action === 'list_students') {
            return redirect()->route('etudiant.index');
        } elseif ($action === 'list_conventions') {
            return redirect()->route('conventions.index');
        }

        return redirect()->route('dashboard');
    }

    public function search(Request $request)
    {
        $query = Etudiant::query();
    
        if ($request->filled('university')) {
            $query->where('universite', $request->university);
        }
    
        if ($request->filled('domain')) {
            $query->where('domaine', $request->domain);
        }
    
        if ($request->filled('email')) {
            $query->where('email', $request->email);
        }
    
        $etudiants = $query->get();
    
        return view('dashboard.search-results', compact('etudiants'));
    }
    
}
