<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Convention;

class EtudiantController extends Controller
{
    // Méthode pour afficher la liste des étudiants
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('etudiant.index', compact('etudiants'));
    }

    // Méthode pour afficher le formulaire de création d'un étudiant
    public function create()
    {
        return view('etudiant.create');
    }

    // Méthode pour stocker un nouvel étudiant
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:etudiants',
            'telephone' => 'required|string|max:20',
            'adresse' => 'required|string|max:255',
            'universite' => 'required|string|max:255',
            'domaine' => 'required|string|max:255',
            'niveau' => 'required|string|max:255',
            'diplome_baccalaureat' => 'required|file|mimes:pdf|max:2048',
            'carte_identite' => 'required|file|mimes:pdf|max:2048',
            'bulletins.*' => 'file|mimes:pdf|max:2048',
            'autre_diplome' => 'nullable|file|mimes:pdf|max:2048',
            'cv' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        // Gestion des fichiers
        $diplomeBaccalaureatPath = $request->file('diplome_baccalaureat')->store('diplomes', 'public');
        $carteIdentitePath = $request->file('carte_identite')->store('identites', 'public');

        $bulletinsPaths = [];
        if ($request->hasFile('bulletins')) {
            foreach ($request->file('bulletins') as $bulletin) {
                $bulletinsPaths[] = $bulletin->store('bulletins', 'public');
            }
        }

        $autreDiplomePath = null;
        if ($request->hasFile('autre_diplome')) {
            $autreDiplomePath = $request->file('autre_diplome')->store('diplomes', 'public');
        }

        $cvPath = null;
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('cv', 'public');
        }

        // Création de l'étudiant
        $etudiant = Etudiant::create([
            'nom' => $validatedData['nom'],
            'prenom' => $validatedData['prenom'],
            'email' => $validatedData['email'],
            'telephone' => $validatedData['telephone'],
            'adresse' => $validatedData['adresse'],
            'universite' => $validatedData['universite'],
            'domaine' => $validatedData['domaine'],
            'niveau' => $validatedData['niveau'],
            'diplome_baccalaureat_path' => $diplomeBaccalaureatPath,
            'carte_identite_path' => $carteIdentitePath,
            'bulletins_paths' => json_encode($bulletinsPaths),
            'autre_diplome_path' => $autreDiplomePath,
            'cv_path' => $cvPath,
        ]);

        // Création de la convention
        $convention = Convention::create([
            'etudiant_id' => $etudiant->id,
            'nom' => $etudiant->nom,
            'prenom' => $etudiant->prenom,
            'adresse' => $etudiant->adresse,
            'adresse_email' => $etudiant->email,
            'ecole' => $etudiant->universite,
            'duree' => '1 an', // Exemple de durée
            'signature_cabinet' => 'sall',
            'status' => 'non traité',
            'domaine' => $etudiant->domaine,
        ]);

        // Redirection avec message de succès
        return view('etudiant.create')->with('success', 'Étudiant créé avec succès.');
    }

    // Méthode pour afficher un étudiant spécifique
    public function show($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        return view('etudiant.show', compact('etudiant'));
    }
}
