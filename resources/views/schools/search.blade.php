@extends('layouts.app')

@section('content')
    <div class="container bg-white shadow-lg p-5 rounded mt-5">
        <h2 class="display-4 text-center text-primary font-italic font-weight-bold mb-4">Rechercher une école par formation</h2>
        
        <form action="{{ route('schools.search.results') }}" method="GET" class="mb-4">
            <div class="form-group">
                <label for="formation">Formation</label>
                <input type="text" name="formation" id="formation" class="form-control" placeholder="Entrez la formation">
            </div>
            <button type="submit" class="btn btn-primary">Rechercher</button>
        </form>
    </div>
@endsection
