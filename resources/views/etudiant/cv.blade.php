<!-- resources/views/etudiant/cv.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Contenu du CV de {{ $etudiant->nom }} {{ $etudiant->prenom }}</h1>
        
        <div class="card">
            <div class="card-body">
                <p>{{ $cvText }}</p>
            </div>
        </div>
    </div>
@endsection
