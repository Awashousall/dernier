@extends('layouts.app')

@section('content')
    <div class="container bg-white shadow-lg p-5 rounded mt-5">
        <h2 class="display-4 text-center text-primary font-italic font-weight-bold mb-4">Liste des écoles</h2>

        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($schools as $school)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $school->school_name }}</h5>
                            <p class="card-text"><strong>Formation:</strong> {{ $school->formation }}</p>
                            <p class="card-text"><strong>Présentation:</strong> {{ $school->presentation }}</p>
                            <form action="{{ route('schools.destroy', $school->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette école ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
