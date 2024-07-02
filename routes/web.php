<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ConventionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegistereController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogineController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContacteController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SchoolController;

// web.php
use App\Http\Controllers\DashboardeController;

Route::get('/', [DashboardeController::class, 'index'])->name('home');

Route::get('/dashboard/unipro', [DashboardeController::class, 'uniproDashboard'])->name('dashboarde.unipro');
Route::get('/dashboard/hemi', [DashboardeController::class, 'hemiDashboard'])->name('dashboarde.hemi');
Route::get('/etudiants/search', [EtudiantController::class, 'searchByDomaine'])->name('etudiants.search');

Route::get('/etudiant/{id}/cv', [EtudiantController::class, 'interrogerCV'])->name('etudiant.cv');


Route::get('etudiants/{id}/details', [EtudiantController::class, 'details'])->name('etudiants.details');
Route::get('etudiants/{id}/modifier', [EtudiantController::class, 'modifier'])->name('etudiants.modifier');
Route::put('etudiants/{id}', [EtudiantController::class, 'update'])->name('etudiants.update');
Route::resource('etudiants', EtudiantController::class)->except(['show', 'edit']);


Route::get('/schools/create', [SchoolController::class, 'create'])->name('schools.create');
Route::post('/schools', [SchoolController::class, 'store'])->name('schools.store');
Route::get('/schools', [SchoolController::class, 'index'])->name('schools.index');


Route::get('/universite', [HomeController::class, 'index'])->name('universite');
Route::get('/students', [StudentController::class, 'index'])->name('students.list');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/students', [StudentController::class, 'index'])->name('students.list');



Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/inscription', [PageController::class, 'inscription'])->name('inscription');
Route::get('/connexion', [PageController::class, 'connexion'])->name('connexion');
Route::get('/deconnexion', [PageController::class, 'deconnexion'])->name('deconnexion');


Route::get('/formation', [PageController::class, 'showFormation'])->name('formation');
Route::get('/forme', [PageController::class, 'showForme'])->name('forme');
Route::get('/presentation', [PageController::class, 'showPresentation'])->name('presentation');
Route::get('/forma', [PageController::class, 'showf'])->name('format');
Route::get('/form', [PageController::class, 'showfo'])->name('form');
Route::get('/present', [PageController::class, 'showp'])->name('presenta');
Route::get('/formas', [PageController::class, 'showfs'])->name('formats');
Route::get('/forms', [PageController::class, 'showfos'])->name('forms');
Route::get('/presents', [PageController::class, 'showps'])->name('presentas');
Route::get('/formase', [PageController::class, 'showfse'])->name('formatse');
Route::get('/formse', [PageController::class, 'showfose'])->name('formse');
Route::get('/presentse', [PageController::class, 'showpse'])->name('presentase');
Route::get('/formases', [PageController::class, 'showfses'])->name('formatses');
Route::get('/formses', [PageController::class, 'showfoses'])->name('formses');
Route::get('/presentses', [PageController::class, 'showpses'])->name('presentases');

// EtudiantController routes
Route::get('/etudiant/create', [EtudiantController::class, 'create'])->name('etudiant.create');
Route::post('/etudiant', [EtudiantController::class, 'store'])->name('etudiant.store');
Route::get('/etudiants', [EtudiantController::class, 'index'])->name('etudiant.index');

Route::get('/etudiantes', [EtudiantController::class, 'indexe'])->name('etudiant.indexe');
Route::get('/etudiantees', [EtudiantController::class, 'indexee'])->name('etudiant.indexee');
Route::get('/etudiant/{id}', [EtudiantController::class, 'show'])->name('etudiant.show');
Route::get('/etudiants', [EtudiantController::class, 'index'])->name('etudiants.index');
Route::middleware(['auth'])->group(function () {
    Route::get('/etudiants', [EtudiantController::class, 'index'])->name('etudiant.index');
    // Ajoutez d'autres routes pour les actions liées aux étudiants si nécessaire
});

// web.php

use Illuminate\Support\Facades\Auth;

// Route pour la déconnexion
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/contacte', [ContacteController::class, 'index'])->name('contacte');


// ConventionController routes
Route::get('/conventions', [ConventionController::class, 'index'])->name('conventions.index');
Route::get('/conventions/create', [ConventionController::class, 'create'])->name('conventions.create');
Route::post('/conventions', [ConventionController::class, 'store'])->name('conventions.store');
Route::get('/conventions/{id}', [ConventionController::class, 'show'])->name('conventions.show');
Route::get('/conventions/{id}/edit', [ConventionController::class, 'edit'])->name('conventions.edit');
Route::put('/conventions/{id}', [ConventionController::class, 'update'])->name('conventions.update');
Route::delete('/conventions/{id}', [ConventionController::class, 'destroy'])->name('conventions.destroy');
Route::get('/conventions/{id}/download', [ConventionController::class, 'download'])->name('conventions.download');

// RegisterController routes
Route::get('/register', [RegisterController::class, 'form_register'])->name('register');
Route::post('/register', [RegisterController::class, 'form_register_post'])->name('register');

Route::get('/registere', [RegistereController::class, 'form_registere'])->name('registere');
Route::post('/registere', [RegistereController::class, 'form_register_poste']);

// LoginController routes
Route::get('/login', [LoginController::class, 'form_login'])->name('login');
Route::post('/login', [LoginController::class, 'form_login_post'])->name('login');

Route::get('/logine', [LogineController::class, 'form_logine'])->name('logine');
Route::post('/logine', [LogineController::class, 'form_login_poste'])->name('logine');

// Dashboard routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::post('/dashboard/action', [DashboardController::class, 'handleAction'])->name('dashboard.action');

Route::view('/contact','contactform')->name('contactform');
Route::post('/send', [ContactController::class, 'send'])->name('send.email');



Route::get('/payment', [PaymentController::class, 'showPaymentForm'])->name('payment.form');


Route::get('/payment/initiate', [TransactionsController::class, 'initiatePayment'])->name('payment.initiate');
Route::get('/payment/return', [PaymentController::class, 'returnUrl'])->name('payment.return');
Route::post('/payment/notify', [PaymentController::class, 'notifyUrl'])->name('payment.notify');


Route::get('/dashboard/search', [DashboardController::class, 'search'])->name('dashboard.search');

