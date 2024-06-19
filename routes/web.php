<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ConventionController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/etudiant', [EtudiantController::class, 'create'])->name('etudiant.create');
Route::post('/etudiant', [EtudiantController::class, 'store'])->name('etudiant.store');
Route::get('/etudiant/create', [EtudiantController::class, 'create'])->name('etudiant.create');
Route::get('/etudiants', [EtudiantController::class, 'index'])->name('etudiant.index');
Route::get('/etudiant/{id}', [EtudiantController::class, 'show'])->name('etudiant.show');


// Afficher la liste des conventions
Route::get('/conventions', [ConventionController::class, 'index'])->name('conventions.index');

// Afficher le formulaire pour créer une nouvelle convention
Route::get('/conventions/create', [ConventionController::class, 'create'])->name('conventions.create');

// Enregistrer une nouvelle convention
Route::post('/conventions', [ConventionController::class, 'store'])->name('conventions.store');

// Afficher une convention spécifique
Route::get('/conventions/{id}', [ConventionController::class, 'show'])->name('conventions.show');

// Afficher le formulaire pour éditer une convention
Route::get('/conventions/{id}/edit', [ConventionController::class, 'edit'])->name('conventions.edit');

// Mettre à jour une convention existante
Route::put('/conventions/{id}', [ConventionController::class, 'update'])->name('conventions.update');

// Supprimer une convention
Route::delete('/conventions/{id}', [ConventionController::class, 'destroy'])->name('conventions.destroy');


