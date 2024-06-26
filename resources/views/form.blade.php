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
                <img src="{{ asset('images/hemi.png') }}" alt="Image d'accueil" style="width: 100px; height: auto;">
            </ul>
        </nav>
    </header>

    <main>
        <section id="accueil" class="section-white">
            <p class="welcome-text">Voici les programmes offerts par l'Université HEMI.</p>
            <div>
                <img src="{{ asset('images/image4.png') }}" alt="Image d'accueil" style="float: left; margin-right: 20px;">
                <p>la HEMI (Haute Ecole de Management et de l'Informatique) est une institution d'enseignement supérieur privée située au Sénégal. Elle se spécialise dans les domaines du management et de l'informatique, offrant des formations axées sur les métiers du management d'entreprise et des technologies de l'information.</p>

            </div>
        </section>

        <section id="ufr" class="section-yellow">
    <h2 style="font-weight: bold; font-style: italic;">Les Unités de Formation :</h2>
    <ul>
    <li><strong>Management d'Entreprise(Formations axées sur la gestion stratégique, la finance, le marketing et les ressources humaines.)</strong></li>
<li><strong>Informatique et Technologie(Cours spécialisés en développement logiciel, administration des systèmes, sécurité informatique et gestion de réseaux.)</strong></li>

    </ul>
</section>

    </main>


</body>
</html>
