@extends('layouts.app')

@section('content')
    <div class="container bg-white shadow-lg p-5 rounded mt-5">
        <h2 class="display-4 text-center text-primary font-italic font-weight-bold mb-4">Résultats de la recherche</h2>
        
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if($schools->isEmpty())
                    <p class="text-center text-danger">Aucune école trouvée pour la formation recherchée.</p>
                @else
                    @foreach ($schools as $school)
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $school->school_name }}</h5>
                                <p class="card-text"><strong>Formation:</strong> {{ $school->formation }}</p>
                                <p class="card-text"><strong>Présentation:</strong> {{ $school->presentation }}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
