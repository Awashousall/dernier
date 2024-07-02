<!-- resources/views/schools/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container bg-white shadow-lg p-5 rounded mt-5">
        <h2 class="display-4 text-center text-primary font-italic font-weight-bold mb-4">Ajout d'une école</h2>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('schools.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="school_name" class="text-primary font-italic">Nom de l'école</label>
                                <input type="text" class="form-control" id="school_name" name="school_name" required>
                            </div>
                            <div class="form-group">
                                <label for="formation" class="text-primary font-italic">Formation</label>
                                <textarea class="form-control" id="formation" name="formation" rows="5" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="presentation" class="text-primary font-italic">Présentation</label>
                                <textarea class="form-control" id="presentation" name="presentation" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-attractive">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
