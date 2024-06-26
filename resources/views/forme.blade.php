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
                <img src="{{ asset('images/image10.jpg') }}" alt="Image d'accueil" style="width: 100px; height: auto;">
            </ul>
        </nav>
    </header>

    <main>
        <section id="accueil" class="section-white">
            <p class="welcome-text">Voici les programmes offerts par l'Université Unipro.</p>
            <div>
                <img src="{{ asset('images/image4.png') }}" alt="Image d'accueil" style="float: left; margin-right: 20px;">
                <p>Le corps professoral de l'Université Unipro est composé de professeurs titulaires,
                     de maîtres de conférence, de maîtres assistants, de docteurs, 
                     d'ingénieurs et de professionnels. Tous sont inscrits sur une liste 
                     d'aptitude et sont qualifiés pour remplir les fonctions et atteindre les objectifs 
                     visés par l'université.</p>

            </div>
        </section>

        <section id="ufr" class="section-yellow">
    <h2 style="font-weight: bold; font-style: italic;">Les Unités de Formation :</h2>
    <ul>
    <li><strong>L'UFR de Génie Juridique et Politique</strong></li>
<li><strong>L'UFR de Gestion Économique et Financière</strong></li>
<li><strong>L'UFR des Sciences et Technologies de l'Ingénieur</strong></li>
<li><strong>L'UFR des Langues, Cultures et Affaires Internationales</strong></li>

    </ul>
</section>

    </main>

</body>
</html>
