<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'étudiant</title>
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

        .form-group {
            margin-bottom: 20px;
        }

        .btn-primary {
            width: 100%;
        }

        .table {
            margin-top: 20px;
        }

        th,
        td {
            text-align: center;
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
            <img src="{{ asset('images/Capture1.PNG') }}" width="90" height="90" alt="Logo du site">
                <a class="navbar-brand blue" href="#">Sunu_Cabinet</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link blue" href="index.html">Accueil</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link blue" href="connexion.html">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="container">
        <h1>Détails de l'étudiant</h1>
        <p><strong>Nom:</strong> {{ $etudiant->nom }}</p>
        <p><strong>Prénom:</strong> {{ $etudiant->prenom }}</p>
        <p><strong>Email:</strong> {{ $etudiant->email }}</p>
        <p><strong>Téléphone:</strong> {{ $etudiant->telephone }}</p>
        <p><strong>Adresse:</strong> {{ $etudiant->adresse }}</p>
        <p><strong>Université:</strong> {{ $etudiant->universite }}</p>
        <p><strong>Domaine:</strong> {{ $etudiant->domaine }}</p>
        <p><strong>Niveau:</strong> {{ $etudiant->niveau }}</p>
        <p><strong>Statut:</strong> {{ $etudiant->statut }}</p>
        
        <p><strong>Diplôme Baccalauréat:</strong> 
            <a href="{{ Storage::url($etudiant->diplome_baccalaureat_path) }}">Voir le fichier</a>
        </p>
        <p><strong>Carte d'Identité ou Passeport:</strong> 
            <a href="{{ Storage::url($etudiant->carte_identite_path) }}">Voir le fichier</a>
        </p>
        
        
        

        <p><strong>Autre Diplôme:</strong> 
            <a href="{{ Storage::url($etudiant->autre_diplome_path) }}">Voir le fichier</a>
        </p>

        <p><strong>CV:</strong> 
    @if ($etudiant->cv_path)
        <a href="{{ Storage::url($etudiant->cv_path) }}" target="_blank">Voir le fichier</a>
    @else
        Aucun CV disponible.
    @endif
</p>

    </div>

    <!-- Scripts Bootstrap (ne pas modifier) -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
