@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tableau de Bord</h1>
        <p>Bienvenue sur votre tableau de bord.</p>
        
        <form action="{{ route('dashboard.action') }}" method="POST">
            @csrf
            <div class="form-group">
                <button type="submit" name="action" value="list_students" class="btn btn-primary">Lister les Étudiants</button>
                <button type="submit" name="action" value="list_conventions" class="btn btn-secondary">Lister les Conventions</button>
            </div>
        </form>
    </div>
@endsection
