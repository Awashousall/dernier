<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Université BEBAEMPIRE - La Formation</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Ajout de styles spécifiques pour la page */
        .welcome-text {
            color: #007bff; /* Couleur bleue */
            font-size: 24px; /* Taille de police plus grande */
            animation: scrollText 10s linear infinite; /* Animation de défilement */
        }

        /* Animation de défilement */
        @keyframes scrollText {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <img src="{{ asset('images/bebe.jpeg') }}" alt="Image d'accueil" style="width: 200px; height: auto;">
            </ul>
        </nav>
    </header>

    <main>
        <section id="accueil" class="section-white">
            <p class="welcome-text">Voici les programmes offerts par BEBAEMPIRE.</p>
            <div>
                <img src="{{ asset('images/image4.png') }}" alt="Image d'accueil" style="float: left; margin-right: 20px;">
                

            </div>
        </section>

        <section id="ufr" class="section-yellow">
    <h2 style="font-weight: bold; font-style: italic;">Les Unités de Formation :</h2>
    <ul>
    <li><strong>Agence de création d'outils de communication digitale et d'identité visuelle
    Accompagnement infographiste pour la création de supports de communication numérique et de création de contenu publicitaire</strong></li>
<li><strong>Marque vestimentaire tradimoderne pour l'émergence de la créativité Africaine
Costume africain Style féminine Exposition de modèle Accessoires vestimentaires</strong></li>
<li><strong>Un réseau de formation en ligne sur les compétences en entrepreneuriat</strong></li>

    </ul>
</section>

    </main>
</body>
</html>
