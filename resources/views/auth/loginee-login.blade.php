{{-- resources/views/auth/loginee-login.blade.php --}}

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <!-- Styles -->
    <style>
        /* Ajoutez ici vos styles CSS personnalisés */
    </style>
</head>
<body>
    <h2>Connexion à votre compte</h2>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('loginee.login') }}">
        @csrf

        <div>
            <label for="email">Adresse Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        </div>

        <div>
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required autocomplete="current-password">
        </div>

        <div>
            <button type="submit">Se connecter</button>
        </div>
    </form>
</body>
</html>
