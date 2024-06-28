@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Détails de la Convention</h2>

        <p><strong>ID:</strong> {{ $convention->id }}</p>
        <p><strong>Nom:</strong> {{ $convention->nom }}</p>
        <p><strong>Prénom:</strong> {{ $convention->prenom }}</p>
        <p><strong>Adresse email:</strong> {{ $convention->adresse_email }}</p>
        <p><strong>École:</strong> {{ $convention->ecole }}</p>
        <p><strong>Durée:</strong> {{ $convention->duree }}</p>
        <p><strong>Status:</strong> {{ $convention->status }}</p>
        <p><strong>Signature du Cabinet:</strong> {{ $convention->signature_cabinet }}</p>
        <p><strong>Domaine:</strong> {{ $convention->domaine }}</p>
        

        <a href="{{ route('conventions.edit', ['id' => $convention->id]) }}" class="btn btn-primary">Modifier</a>

        <form action="{{ route('conventions.destroy', ['id' => $convention->id]) }}" method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette convention ?')">Supprimer</button>
        </form>
    </div>
@endsection
