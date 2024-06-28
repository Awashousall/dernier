@extends('layouts.app')

@section('content')
    <div class="container bg-white shadow-lg p-5 rounded mt-5">
        <!-- Logo et menu de navigation -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="d-flex align-items-center">
                
            </div>
            <div>
                
            </div>
        </div>

        <h2 class="display-4 text-center text-primary font-italic font-weight-bold mb-4">Tableau de Bord</h2>

        <!-- Formulaire de recherche en haut à droite -->
        
        <p class="lead text-center text-primary scrolling-text">Bienvenue sur votre tableau de bord.</p>

        <div class="row justify-content-center">
            <!-- Carte pour Lister les Étudiants -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-primary font-italic">Lister les Étudiants</h5>
                        <p class="card-text">Voir la liste des étudiants.</p>
                        <form action="{{ route('dashboard.action') }}" method="POST">
                            @csrf
                            <button type="submit" name="action" value="list_students" class="btn btn-primary btn-attractive">Lister les Étudiants</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Carte pour Lister les Conventions -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-primary font-italic">Lister les Conventions</h5>
                        <p class="card-text">Voir la liste des conventions.</p>
                        <form action="{{ route('dashboard.action') }}" method="POST">
                            @csrf
                            <button type="submit" name="action" value="list_conventions" class="btn btn-primary btn-attractive">Lister les Conventions</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Carte pour Envoyer les Emails -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-primary font-italic">Email</h5>
                        <p class="card-text">Envoyer les emails.</p>
                        <form action="{{ route('contactform') }}" method="GET">
                            @csrf
                            <button type="submit" name="action" value="send_emails" class="btn btn-primary btn-attractive">Envoyer les Emails</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer -->
        
    </div>
@endsection
