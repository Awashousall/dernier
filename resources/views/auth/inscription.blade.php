<!-- resources/views/auth/inscription.blade.php -->

<form method="POST" action="{{ route('inscription.submit') }}">
    @csrf

    <div>
        <label for="nom">Nom</label>
        <input id="nom" type="text" name="nom" value="{{ old('nom') }}" required autocomplete="nom">
    </div>

    <div>
        <label for="prenom">Prénom</label>
        <input id="prenom" type="text" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom">
    </div>

    <div>
        <label for="email">Adresse Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
    </div>

    <div>
        <label for="password">Mot de passe</label>
        <input id="password" type="password" name="password" required autocomplete="new-password">
    </div>

    <div>
        <label for="password_confirmation">Confirmer le mot de passe</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
    </div>

    <button type="submit">S'inscrire</button>
</form>
