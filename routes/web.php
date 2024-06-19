<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ConventionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/etudiant', [EtudiantController::class, 'create'])->name('etudiant.create');
Route::post('/etudiant', [EtudiantController::class, 'store'])->name('etudiant.store');
Route::get('/etudiant/create', [EtudiantController::class, 'create'])->name('etudiant.create');
Route::get('/etudiants', [EtudiantController::class, 'index'])->name('etudiant.index');
Route::get('/etudiant/{id}', [EtudiantController::class, 'show'])->name('etudiant.show');

Route::get('/conventions', [ConventionController::class, 'index'])->name('conventions.index');
Route::get('/conventions/create', [ConventionController::class, 'create'])->name('conventions.create');
Route::post('/conventions', [ConventionController::class, 'store'])->name('conventions.store');
Route::get('/conventions/{id}', [ConventionController::class, 'show'])->name('conventions.show');
Route::get('/conventions/{id}/edit', [ConventionController::class, 'edit'])->name('conventions.edit');
Route::put('/conventions/{id}', [ConventionController::class, 'update'])->name('conventions.update');
Route::delete('/conventions/{id}', [ConventionController::class, 'destroy'])->name('conventions.destroy');
Route::post('/conventions', [ConventionController::class, 'store'])->name('conventions.store');
Route::get('/conventions/{id}/download', 'ConventionController@download')->name('conventions.download');

Route::get('/register', [RegisterController::class, 'form_register'])->name('register');
Route::post('/register', [RegisterController::class, 'form_register_post'])->name('register');

Route::get('/login', [LoginController::class, 'form_login'])->name('login');
Route::post('/login', [LoginController::class, 'form_login_post'])->name('login');

// Route pour afficher le tableau de bord
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route pour gérer les actions du tableau de bord
Route::post('/dashboard/action', [DashboardController::class, 'handleAction'])->name('dashboard.action');
