<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School; // Assurez-vous d'avoir un modèle School correspondant

class SchoolController extends Controller
{
    public function index()
    {
        // Optionnel : Afficher une liste des écoles si nécessaire
        $schools = School::all();
        return view('schools.index', compact('schools'));
    }

    public function create()
    {
        return view('schools.create');
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'school_name' => 'required|string|max:255',
            'formation' => 'required|string',
            'presentation' => 'required|string',
        ]);

        // Créer une nouvelle école avec les données validées
        School::create($validatedData);

        // Redirection avec message de succès
        return redirect()->route('dashboard')->with('success', 'École ajoutée avec succès.');
    }
}
