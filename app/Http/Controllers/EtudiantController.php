<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Convention;
use Smalot\PdfParser\Parser;
use Illuminate\Support\Facades\Hash;

class EtudiantController extends Controller
{
    public function extractCVText($cvPath)
    {
        $parser = new Parser();
        $pdf = $parser->parseFile(public_path($cvPath));
        
        // Extraction du texte brut du PDF
        $text = $pdf->getText();

        return $text;
    }

    public function modifier($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        return view('etudiant.modifier', compact('etudiant'));
    }

    public function details($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        return view('etudiant.details', compact('etudiant'));
    }

    // Méthode pour afficher la liste des étudiants
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('etudiant.index', compact('etudiants'));
    }

    public function searchByDomaine(Request $request)
    {
        $domaine = $request->input('domaine');

        // Filtrer les étudiants par domaine et université Unipro si un domaine est spécifié
        if ($domaine) {
            $etudiants = Etudiant::where('universite', 'Unipro')
                                ->where('domaine', $domaine)
                                ->get();
        } else {
            // Retourner tous les étudiants de l'université Unipro si aucun domaine spécifié
            $etudiants = Etudiant::where('universite', 'Unipro')->get();
        }

        return view('etudiant.index', compact('etudiants'));
    }

    public function interrogerCV($etudiantId)
    {
        // Récupérer l'étudiant
        $etudiant = Etudiant::findOrFail($etudiantId);

        // Exemple d'extraction et d'analyse du texte du CV
        $cvText = $this->extractCVText($etudiant->cv_path);

        return view('etudiant.cv', compact('etudiant', 'cvText'));
    }

    public function searchByCompetences(Request $request)
    {
        $competenceRecherchee = $request->input('competence');

        // Récupère tous les étudiants de l'Université Unipro
        $etudiants = Etudiant::where('universite', 'Unipro')->get();

        $etudiantsAvecCompetences = [];

        foreach ($etudiants as $etudiant) {
            // Extraction du texte brut du CV
            $cvText = $this->extractCVText($etudiant->cv_path);

            // Simulation de recherche de compétences dans le texte du CV
            if (stripos($cvText, $competenceRecherchee) !== false) {
                $etudiantsAvecCompetences[] = $etudiant;
            }
        }

        return view('etudiant.index', compact('etudiantsAvecCompetences'));
    }

    public function indexe()
    {
        $etudiants = Etudiant::where('universite', 'Unipro')->get();
        return view('etudiant.indexe', compact('etudiants'));
    }

    public function indexee()
    {
        $etudiants = Etudiant::where('universite', 'Hemi')->get();
        return view('etudiant.indexee', compact('etudiants'));
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
            'password' => 'required|string|min:8|confirmed',
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
            'password' => Hash::make($validatedData['password']),
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
        return redirect()->route('etudiants.details', $etudiant->id)->with('success', 'Étudiant créé avec succès.');
    }

    // Méthode pour mettre à jour un étudiant existant
    public function update(Request $request, $id)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:etudiants,email,' . $id,
            'telephone' => 'required|string|max:20',
            'adresse' => 'required|string|max:255',
            'universite' => 'required|string|max:255',
            'domaine' => 'required|string|max:255',
            'niveau' => 'required|string|max:255',
            'diplome_baccalaureat' => 'nullable|file|mimes:pdf|max:2048',
            'carte_identite' => 'nullable|file|mimes:pdf|max:2048',
            'bulletins.*' => 'nullable|file|mimes:pdf|max:2048',
            'autre_diplome' => 'nullable|file|mimes:pdf|max:2048',
            'cv' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        // Récupération de l'étudiant
        $etudiant = Etudiant::findOrFail($id);

        // Gestion des fichiers
        if ($request->hasFile('diplome_baccalaureat')) {
            $etudiant->diplome_baccalaureat_path = $request->file('diplome_baccalaureat')->store('diplomes', 'public');
        }
        if ($request->hasFile('carte_identite')) {
            $etudiant->carte_identite_path = $request->file('carte_identite')->store('identites', 'public');
        }
        if ($request->hasFile('bulletins')) {
            $bulletinsPaths = [];
            foreach ($request->file('bulletins') as $bulletin) {
                $bulletinsPaths[] = $bulletin->store('bulletins', 'public');
            }
            $etudiant->bulletins_paths = json_encode($bulletinsPaths);
        }
        if ($request->hasFile('autre_diplome')) {
            $etudiant->autre_diplome_path = $request->file('autre_diplome')->store('diplomes', 'public');
        }
        if ($request->hasFile('cv')) {
            $etudiant->cv_path = $request->file('cv')->store('cv', 'public');
        }

        // Mise à jour des autres attributs
        $etudiant->nom = $validatedData['nom'];
        $etudiant->prenom = $validatedData['prenom'];
        $etudiant->email = $validatedData['email'];
        $etudiant->telephone = $validatedData['telephone'];
        $etudiant->adresse = $validatedData['adresse'];
        $etudiant->universite = $validatedData['universite'];
        $etudiant->domaine = $validatedData['domaine'];
        $etudiant->niveau = $validatedData['niveau'];

        // Sauvegarde des modifications
        $etudiant->save();

        // Redirection avec message de succès
        return redirect()->route('etudiants.details', $etudiant->id)->with('success', 'Étudiant mis à jour avec succès.');
    }

    // Méthode pour afficher un étudiant spécifique
    public function show($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        return view('etudiant.show', compact('etudiant'));
    }
}
