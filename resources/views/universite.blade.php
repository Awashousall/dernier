<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Bienvenue sur la page d'accueil</h1>
        @auth
            @if(Auth::user()->email === 'unipro@edu.sn')
                <a href="{{ route('dashboarde.unipro') }}" class="btn btn-primary mt-3">Lister les étudiants Unipro</a>
            @elseif(Auth::user()->email === 'hemi@edu.sn')
                <a href="{{ route('dashboarde.hemi') }}" class="btn btn-primary mt-3">Lister les étudiants Hemi</a>
            @else
                <p>Bienvenue, mais aucune action définie pour votre université.</p>
            @endif
        @else
            <p>Veuillez vous connecter pour accéder au tableau de bord.</p>
            <a href="{{ route('login') }}" class="btn btn-primary mt-3">Se connecter</a>
        @endauth
    </div>
</body>
</html>
