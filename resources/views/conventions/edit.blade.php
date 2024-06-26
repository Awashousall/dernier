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
        <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom', $convention->nom) }}" required>
    </div>

    <div class="form-group">
        <label for="prenom">Prénom</label>
        <input type="text" class="form-control" id="prenom" name="prenom" value="{{ old('prenom', $convention->prenom) }}" required>
    </div>

    <div class="form-group">
        <label for="adresse_email">Adresse email</label>
        <input type="email" class="form-control" id="adresse_email" name="adresse_email" value="{{ old('adresse_email', $convention->adresse_email) }}" required>
    </div>

    <div class="form-group">
        <label for="ecole">École</label>
        <input type="text" class="form-control" id="ecole" name="ecole" value="{{ old('ecole', $convention->ecole) }}" required>
    </div>

    <div class="form-group">
        <label for="duree">Durée</label>
        <input type="text" class="form-control" id="duree" name="duree" value="{{ old('duree', $convention->duree) }}" required>
    </div>

    <div class="form-group">
        <label for="status">Status</label>
        <input type="text" class="form-control" id="status" name="status" value="{{ old('status', $convention->status) }}" required>
    </div>

    <div class="form-group">
        <label for="domaine">Domaine</label>
        <input type="text" class="form-control" id="domaine" name="domaine" value="{{ old('domaine', $convention->domaine) }}" required>
    </div>

    <div class="form-group">
        <label for="signature_cabinet">Signature Cabinet</label>
        <input type="text" class="form-control" id="signature_cabinet" name="signature_cabinet" value="{{ old('signature_cabinet', $convention->signature_cabinet) }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Modifier la Convention</button>
</form>

    </div>
@endsection
