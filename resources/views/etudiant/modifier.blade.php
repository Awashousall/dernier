@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier l'étudiant</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('etudiants.update', $etudiant->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" class="form-control" value="{{ $etudiant->nom }}" required>
        </div>

        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" class="form-control" value="{{ $etudiant->prenom }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $etudiant->email }}" required>
        </div>

        <div class="form-group">
            <label for="telephone">Téléphone</label>
            <input type="text" name="telephone" class="form-control" value="{{ $etudiant->telephone }}" required>
        </div>

        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" class="form-control" value="{{ $etudiant->adresse }}" required>
        </div>

        <div class="form-group">
            <label for="universite">Université</label>
            <input type="text" name="universite" class="form-control" value="{{ $etudiant->universite }}" required>
        </div>

        <div class="form-group">
            <label for="domaine">Domaine</label>
            <input type="text" name="domaine" class="form-control" value="{{ $etudiant->domaine }}" required>
        </div>

        <div class="form-group">
            <label for="niveau">Niveau</label>
            <input type="text" name="niveau" class="form-control" value="{{ $etudiant->niveau }}" required>
        </div>

        <div class="form-group">
            <label for="diplome_baccalaureat">Diplôme de baccalauréat</label>
            <input type="file" name="diplome_baccalaureat" class="form-control">
        </div>

        <div class="form-group">
            <label for="carte_identite">Carte d'identité</label>
            <input type="file" name="carte_identite" class="form-control">
        </div>

        <div class="form-group">
            <label for="bulletins">Bulletins</label>
            <input type="file" name="bulletins[]" class="form-control" multiple>
        </div>

        <div class="form-group">
            <label for="autre_diplome">Autre diplôme</label>
            <input type="file" name="autre_diplome" class="form-control">
        </div>

        <div class="form-group">
            <label for="cv">CV</label>
            <input type="file" name="cv" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
        <a href="{{ route('etudiants.details', $etudiant->id) }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
