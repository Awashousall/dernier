<!-- Formulaire d'enregistrement -->
<form method="POST" action="{{ route('enregistrement.enregistrer') }}">
    @csrf

    <!-- Champ pour le nom -->
    <div>
        <label for="nom">Nom</label>
        <input id="nom" type="text" name="nom" value="{{ old('nom') }}" required autocomplete="nom">
    </div>

    <!-- Champ pour le prénom -->
    <div>
        <label for="prenom">Prénom</label>
        <input id="prenom" type="text" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom">
    </div>

    <!-- Champ pour l'email -->
    <div>
        <label for="email">Adresse email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
    </div>

    <!-- Champ pour le mot de passe -->
    <div>
        <label for="password">Mot de passe</label>
        <input id="password" type="password" name="password" required autocomplete="new-password">
    </div>

    <!-- Champ pour la confirmation du mot de passe -->
    <div>
        <label for="password_confirmation">Confirmer le mot de passe</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
    </div>

    <!-- Bouton de soumission -->
    <div>
        <button type="submit">S'inscrire</button>
    </div>
</form>
