<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des étudiants inscrits</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body {
            background-color: #e6f2ff; /* Bleu clair */
            color: #000; /* Noir */
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: #fff; /* Blanc */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 32px; /* Taille de la police */
            color: #007bff; /* Couleur bleue claire */
            text-align: center; /* Centrer le texte */
            text-transform: uppercase; /* Mettre en majuscules */
            margin-top: 10px; /* Marge en haut pour l'espacement */
            padding: 10px; /* Ajouter un espace à l'intérieur du cadre */
            border: 1px solid #007bff; /* Bordure de 2px solide bleue claire */
            border-radius: 5px; /* Coins arrondis de 10px */
        }

        .list-group-item {
            border-color: #007bff !important; /* Couleur de bordure pour les éléments de la liste */
            font-weight: bold; /* Texte en gras */
            font-style: italic; /* Texte en italique */
            padding: 5px; /* Réduire l'espace intérieur */
            margin-bottom: 5px; /* Réduire l'espace entre les éléments de la liste */
        }

        /* Style pour les liens en bleu */
        .nav-link.blue,
        .navbar-brand.blue {
            color: blue !important;
        }

        .bg-dark {
            background-color: #343a40 !important; /* Couleur sombre pour le fond de la barre de navigation */
        }
    </style>
</head>
<body>
    <div class="bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand blue" href="#">Logo du site</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link blue" href="#">Accueil</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link blue" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="container">
        <h1>LISTE DES ÉTUDIANTS INSCRITS À L'UNIVERSITÉ UNIPRO</h1>
        <ul class="list-group">
            @foreach($etudiants as $etudiant)
                @if($etudiant->universite === 'unipro')
                    <li class="list-group-item">
                        <a href="{{ route('etudiant.show', $etudiant->id) }}" style="text-decoration: none;"> <!-- Ajout du style pour supprimer le soulignement des liens -->
                            <span style="font-style: italic; font-weight: bold;">{{ $etudiant->nom }} {{ $etudiant->prenom }}</span>
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>

    <!-- Scripts Bootstrap (ne pas modifier) -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
