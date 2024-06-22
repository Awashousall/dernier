@extends('layouts.app')

@section('content')
    <div class="container bg-white shadow-lg p-5 rounded mt-5">
        <h1 class="display-4 text-center text-primary font-italic font-weight-bold">Tableau de Bord</h1>
        <p class="lead text-center text-primary scrolling-text">Bienvenue sur votre tableau de bord.</p>
        
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title text-primary font-italic">Lister les Étudiants</h5>
                        <p class="card-text">Voir la liste des étudiants.</p>
                        <form action="{{ route('dashboard.action') }}" method="POST">
                            @csrf
                            <button type="submit" name="action" value="list_students" class="btn btn-primary btn-attractive">Lister les Étudiants</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-lg-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title text-secondary font-italic">Lister les Conventions</h5>
                        <p class="card-text">Voir la liste des conventions.</p>
                        <form action="{{ route('dashboard.action') }}" method="POST">
                            @csrf
                            <button type="submit" name="action" value="list_conventions" class="btn btn-secondary btn-attractive">Lister les Conventions</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
