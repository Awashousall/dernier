<!-- resources/views/dashboard/search-results.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container bg-white shadow-lg p-5 rounded mt-5">
        <h1 class="display-4 text-center text-primary font-italic font-weight-bold">Résultats de Recherche</h1>
        
        @if($etudiants->isEmpty())
            <p class="lead text-center text-primary">Aucun résultat trouvé.</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Université</th>
                        <th>Domaine</th>
                        <th>Niveau</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($etudiants as $etudiant)
                        <tr>
                            <td>{{ $etudiant->nom }}</td>
                            <td>{{ $etudiant->prenom }}</td>
                            <td>{{ $etudiant->email }}</td>
                            <td>{{ $etudiant->universite }}</td>
                            <td>{{ $etudiant->domaine }}</td>
                            <td>{{ $etudiant->niveau }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
