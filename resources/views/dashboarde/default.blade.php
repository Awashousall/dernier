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
        @if (Auth::check())
            @switch(Auth::user()->universite)
                @case('unipro@edu.sn')
                    <a href="{{ route('dashboarde.unipro') }}" class="btn btn-primary mt-3">Lister les étudiants</a>
                    @break
                @case('hemi@edu.sn')
                    <a href="{{ route('dashboarde.hemi') }}" class="btn btn-primary mt-3">Action spécifique pour Hemi</a>
                    @break
                @default
                    <p>Bienvenue, mais aucune action définie pour votre université.</p>
            @endswitch
        @endif
    </div>
</body>
</html>
