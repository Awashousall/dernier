@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('awasall@esp.sn') }}</div>

                

                    <!-- Lien pour lister tous les étudiants -->
                    <a href="{{ route('etudiant.index') }}" class="btn btn-secondary">Lister detail</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
