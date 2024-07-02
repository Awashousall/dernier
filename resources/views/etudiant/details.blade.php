@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Détails de l'étudiant</h1>

    <div class="card">
        <div class="card-header">
            {{ $etudiant->nom }} {{ $etudiant->prenom }}
        </div>
        <div class="card-body">
            <p><strong>Email :</strong> {{ $etudiant->email }}</p>
            <p><strong>Téléphone :</strong> {{ $etudiant->telephone }}</p>
            <p><strong>Adresse :</strong> {{ $etudiant->adresse }}</p>
            <p><strong>Université :</strong> {{ $etudiant->universite }}</p>
            <p><strong>Domaine :</strong> {{ $etudiant->domaine }}</p>
            <p><strong>Niveau :</strong> {{ $etudiant->niveau }}</p>
            <p><strong>Diplôme de baccalauréat :</strong> <a href="{{ asset('storage/' . $etudiant->diplome_baccalaureat_path) }}" target="_blank">Voir</a></p>
            <p><strong>Carte d'identité :</strong> <a href="{{ asset('storage/' . $etudiant->carte_identite_path) }}" target="_blank">Voir</a></p>
            <p><strong>CV :</strong> <a href="{{ asset('storage/' . $etudiant->cv_path) }}" target="_blank">Voir</a></p>

            <a href="{{ route('etudiants.modifier', $etudiant->id) }}" class="btn btn-primary">Modifier</a>
            <a href="{{ route('etudiant.create') }}" class="btn btn-secondary">Retour</a>
        </div>
    </div>
</div>
@endsection
