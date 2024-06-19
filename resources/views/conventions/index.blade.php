@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Liste des Conventions</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($conventions as $convention)
                    <tr>
                        <td>{{ $convention->id }}</td>
                        <td>{{ $convention->nom }}</td>
                        <td>
                            <a href="{{ route('conventions.show', ['id' => $convention->id]) }}" class="btn btn-info btn-sm">Voir</a>
                            <a href="{{ route('conventions.edit', ['id' => $convention->id]) }}" class="btn btn-primary btn-sm">Modifier</a>
                            <form action="{{ route('conventions.destroy', ['id' => $convention->id]) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette convention ?')">Supprimer</button>
                            </form>
                            @if ($convention->fichier)
                                <a href="{{ route('conventions.download', ['id' => $convention->id]) }}" class="btn btn-success btn-sm">Télécharger</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
