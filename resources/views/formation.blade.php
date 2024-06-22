<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Université Dakar-Bourguiba - La Formation</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Ajout de styles spécifiques pour la page */

        .welcome-text {
            color: #007bff; /* Couleur bleue */
            font-size: 28px; /* Taille de police plus grande */
            font-style: italic; /* Texte en italique */
            font-weight: bold; /* Texte en gras */
            animation: scrollText 10s linear infinite; /* Animation de défilement */
        }

          /* Animation de défilement */
          @keyframes scrollText {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0; /* Couleur de fond */
        }

        .container {
            width: 90%; /* Largeur du contenu */
            margin: 0 auto; /* Centrer horizontalement */
        }

        header {
            background-color: #007bff; /* Couleur de fond du header */
            padding: 10px 0; /* Espacement intérieur */
            border-bottom: 2px solid #ccc; /* Bordure en bas */
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center; /* Centrer les éléments de la liste */
        }

        nav ul li {
            display: inline-block; /* Afficher en ligne */
            margin: 0 10px; /* Espacement entre les éléments */
        }

        nav ul li a {
            text-decoration: none;
            color: white; /* Couleur du texte */
            font-weight: bold;
            font-size: 16px;
        }

        nav img {
            vertical-align: middle; /* Ajuster l'alignement vertical */
            margin-right: 10px; /* Espacement à droite */
        }

        main {
            padding: 20px 0; /* Espacement intérieur */
        }

        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #007bff; /* Couleur de fond du footer */
            color: white; /* Couleur du texte */
            position: fixed;
            bottom: 0;
            width: 100%;
            left: 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <ul>
                    <li><img src="{{ asset('images/image5.png') }}" alt="Logo"></li>
                    <li><a href="#">ACCUEIL</a></li>
                    <li><a href="{{ route('presentation') }}">PRÉSENTATION</a></li>
                    <li><a href="{{ route('forme') }}">FORMATION</a></li>
                    <li><a href="{{ route('etudiant.create') }}">S'INSCRIRE</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <section id="accueil" class="section-white">
                <p class="welcome-text">Bienvenue sur le site de l'Université Dakar-Bourguiba.</p>
                <img src="{{ asset('images/image8.png') }}" alt="Image d'accueil">
            </section>

            <section id="enseignements" class="section-white">
                <h2>Les Enseignements</h2>
                <p style="font-weight: bold; font-style: italic;">
                    Les enseignements comportent des cours, des travaux dirigés, des travaux pratiques, des projets, des stages et des ateliers d'imprégnation professionnelle. Ils sont regroupés en Unités d'Enseignement (UE), chacune composée d'Eléments Constitutifs de l'Unité d'Enseignement (E.C.U.E).
                </p>
                <p style="font-weight: bold; font-style: italic;">
                    À chaque UE est associé un poids en Crédits, et une compensation est réalisée à l'intérieur de chaque UE par décision d'un jury scientifique et par rapport aux notes obtenues, en tenant compte des notes éliminatoires qui ne sont pas compensables.
                </p>
            </section>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Université Dakar-Bourguiba. Tous droits réservés.</p>
    </footer>
</body>
</html>
