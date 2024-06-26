<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Université IPROSI - La Formation</title>
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
                <img src="{{ asset('images/ipros.png') }}" alt="Image d'accueil" style="width: 200px; height: auto;">
            </ul>
        </nav>
    </header>

    <main>
        <section id="accueil" class="section-white">
            <p class="welcome-text">Voici les programmes offerts par l'Université IPROSI.</p>
            <div>
                <img src="{{ asset('images/image4.png') }}" alt="Image d'accueil" style="float: left; margin-right: 20px;">
                

            </div>
        </section>

        <section id="ufr" class="section-yellow">
    <h2 style="font-weight: bold; font-style: italic;">Les Unités de Formation :</h2>
    <ul>
    <li><strong>Sécurité des Systèmes Informatique de l’Entreprise(SESINE)</strong></li>
<li><strong>Réseaux et Systèmes d’Information de l’Entreprise(RESINE)</strong></li>
<li><strong>Formation en BTS TRANSIT</strong></li>
<li><strong>BTS Informatique de GestionE</strong></li>
<li><strong>Sécurité des Systèmes Informatique de l’Entreprise(SESINE)</strong></li>

    </ul>
</section>

    </main>
</body>
</html>
