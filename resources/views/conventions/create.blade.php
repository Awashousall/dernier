@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Ajouter une Convention</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('conventions.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Nom de la Convention</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez le nom de la convention">
            </div>
            <!-- Ajoutez d'autres champs de formulaire ici selon vos besoins -->

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection
