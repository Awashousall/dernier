<!-- resources/views/logineee.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Connexion</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email">Adresse Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input id="password" type="password" name="password" required autocomplete="current-password" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
</div>
@endsection
