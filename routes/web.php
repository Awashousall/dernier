<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ConventionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentController;


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
Route::get('/etudiant/{id}', [EtudiantController::class, 'show'])->name('etudiant.show');

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

// LoginController routes
Route::get('/login', [LoginController::class, 'form_login'])->name('login');
Route::post('/login', [LoginController::class, 'form_login_post'])->name('login');

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

