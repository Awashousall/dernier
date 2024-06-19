@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Détails de la Convention</h2>

        <p><strong>ID:</strong> {{ $convention->id }}</p>
        <p><strong>Nom:</strong> {{ $convention->nom }}</p>
        <p><strong>Preom:</strong> {{ $convention->prenom }}</p>
        <p><strong>Adresse_email:</strong> {{ $convention->adresse_email }}</p>
        <p><strong>ecole:</strong> {{ $convention->ecole }}</p>
        <p><strong>durée:</strong> {{ $convention->duree }}</p>
        <p><strong>signature_cabinet:</strong> {{ $convention->signature_cabinet }}</p>

        <a href="{{ route('conventions.edit', ['id' => $convention->id]) }}" class="btn btn-primary">Modifier</a>

        <form action="{{ route('conventions.destroy', ['id' => $convention->id]) }}" method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette convention ?')">Supprimer</button>
        </form>
    </div>
@endsection
