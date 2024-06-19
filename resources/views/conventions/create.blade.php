@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Créer une nouvelle Convention</h2>

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
                <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom') }}">
            </div>

            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="{{ old('prenom') }}">
            </div>

            <div class="form-group">
                <label for="adresse_email">Adresse email</label>
                <input type="email" class="form-control" id="adresse_email" name="adresse_email" value="{{ old('adresse_email') }}">
            </div>

            <div class="form-group">
                <label for="ecole">École</label>
                <input type="text" class="form-control" id="ecole" name="ecole" value="{{ old('ecole') }}">
            </div>

            <div class="form-group">
                <label for="duree">Durée</label>
                <input type="text" class="form-control" id="duree" name="duree" value="{{ old('duree') }}">
            </div>

            <div class="form-group">
                <label for="signature_cabinet">Signature du cabinet</label>
                <input type="text" class="form-control" id="signature_cabinet" name="signature_cabinet" value="{{ old('signature_cabinet') }}">
            </div>

            <div class="form-group">
    <label for="fichier">Fichier</label>
    <input type="file" class="form-control-file" id="fichier" name="fichier">
</div>

            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
@endsection
