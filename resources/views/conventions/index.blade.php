@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Liste des Conventions</h2>
        <a href="{{ route('conventions.create') }}" class="btn btn-primary mb-3">Ajouter une Convention</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($conventions as $convention)
                    <tr>
                        <th scope="row">{{ $convention->id }}</th>
                        <td>{{ $convention->nom }}</td>
                        <td>
                            <a href="{{ route('conventions.show', ['id' => $convention->id]) }}" class="btn btn-info btn-sm">Voir</a>
                            <a href="{{ route('conventions.edit', ['id' => $convention->id]) }}" class="btn btn-primary btn-sm">Modifier</a>
                            <form action="{{ route('conventions.destroy', ['id' => $convention->id]) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette convention ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
