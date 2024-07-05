@extends('layouts.autre-layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Adresse email connectée : ') . Auth::guard('etudiants')->user()->email }}</div>

                <div class="card-body">
                    <!-- Lien pour afficher les détails de l'étudiant -->
                    <a href="{{ route('etudiants.details', ['id' => Auth::guard('etudiants')->user()->id]) }}" class="btn btn-secondary">Voir mes détails</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
