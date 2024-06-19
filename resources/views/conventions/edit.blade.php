@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Modifier la Convention</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('conventions.update', ['id' => $convention->id]) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="nom">Nom de la Convention</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $convention->nom }}">
            </div>

            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $convention->prenom }}">
            </div>

            <div class="form-group">
                <label for="adresse_email">Adresse email</label>
                <input type="email" class="form-control" id="adresse_email" name="adresse_email" value="{{ $convention->adresse_email }}">
            </div>

            <div class="form-group">
                <label for="ecole">École</label>
                <input type="text" class="form-control" id="ecole" name="ecole" value="{{ $convention->ecole }}">
            </div>

            <div class="form-group">
                <label for="duree">Durée</label>
                <input type="text" class="form-control" id="duree" name="duree" value="{{ $convention->duree }}">
            </div>

            <div class="form-group">
                <label for="signature_cabinet">École</label>
                <input type="text" class="form-control" id="signature_cabinet" name="signature_cabinet" value="{{ $convention->signature_cabinet }}">
            </div>
            

            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
@endsection
