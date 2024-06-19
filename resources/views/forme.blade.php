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
                <img src="{{ asset('images/image5.png') }}" alt="Image d'accueil">
            </ul>
        </nav>
    </header>

    <main>
        <section id="accueil" class="section-white">
            <p class="welcome-text">Voici les programmes offerts par l'Université Dakar-Bourguiba.</p>
            <div>
                <img src="{{ asset('images/image4.png') }}" alt="Image d'accueil" style="float: left; margin-right: 20px;">
                <p>Le corps professoral est constitué de professeurs titulaires des universités, de maîtres de conférence, de maîtres assistants, de docteurs, d'ingénieurs et de professionnels, tous inscrits sur une liste d'aptitude aux fonctions et objectifs visés par l'université.</p>
            </div>
        </section>

        <section id="ufr" class="section-yellow">
    <h2 style="font-weight: bold; font-style: italic;">Les Unités de Formation et de Recherche (U.F.R) :</h2>
    <ul>
        <li><strong>L'UFR de Génie Juridique</strong></li>
        <li><strong>L'UFR de Génie Gestion Economique</strong></li>
        <li><strong>L'UFR de Sciences et Technologies</strong></li>
        <li><strong>L'UFR des Langues et Affaires</strong></li>
    </ul>
</section>

    </main>

    <footer>
        <p>&copy; 2024 Université Dakar-Bourguiba. Tous droits réservés.</p>
    </footer>
</body>
</html>
