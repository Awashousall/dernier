<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Convention;

class ConventionController extends Controller
{
    // Affiche une liste de toutes les conventions
    public function index()
    {
        $conventions = Convention::all();
        return view('conventions.index', compact('conventions'));
    }

    // Affiche le formulaire pour créer une nouvelle convention
    public function create()
    {
        return view('conventions.create');
    }
    public function download($id)
{
    $convention = Convention::findOrFail($id);

    // Vérifier si un fichier est associé à la convention
    if ($convention->fichier) {
        $file = storage_path('app/public/fichiers/' . $convention->fichier);

        // Vérifier si le fichier existe physiquement
        if (file_exists($file)) {
            return response()->download($file);
        } else {
            return back()->with('error', 'Le fichier associé à cette convention n\'existe pas.');
        }
    }

    return back()->with('error', 'Aucun fichier associé à cette convention.');
}

    // Enregistre une nouvelle convention
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'adresse_email' => 'required|email|max:255',
            'ecole' => 'required|string|max:255',
            'duree' => 'required|string|max:255',
            'signature_cabinet' => 'required|string|max:255',
            'fichier' => 'file|max:2048',
        ]);

        if ($request->hasFile('fichier')) {
            $file = $request->file('fichier');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/fichiers', $filename); // Stocker dans le dossier de stockage "storage/app/public/fichiers"
    
            $validatedData['fichier'] = $filename; // Enregistrer le nom du fichier dans la base de données
        }

        Convention::create($validatedData);

        return redirect()->route('conventions.index')->with('success', 'Convention créée avec succès.');
    }

    // Affiche une convention spécifique
    public function show($id)
    {
        $convention = Convention::findOrFail($id);
        return view('conventions.show', compact('convention'));
    }

    // Affiche le formulaire pour éditer une convention existante
    public function edit($id)
    {
        $convention = Convention::findOrFail($id);
        return view('conventions.edit', compact('convention'));
    }

    // Met à jour une convention existante
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
        'adresse_email' => 'required|email|max:255',
        'ecole' => 'required|string|max:255',
        'duree' => 'required|string|max:255',
        'signature_cabinet' => 'required|string|max:255',
        ]);

        Convention::whereId($id)->update($validatedData);

        return redirect()->route('conventions.index')->with('success', 'Convention mise à jour avec succès.');
    }

    // Supprime une convention de la base de données
    public function destroy($id)
    {
        $convention = Convention::findOrFail($id);
        $convention->delete();

        return redirect()->route('conventions.index')->with('success', 'Convention supprimée avec succès.');
    }
}
