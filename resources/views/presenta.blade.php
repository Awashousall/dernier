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
            <p class="welcome-text">Université hemi.</p>
            <div>
                <img src="{{ asset('images/image4.png') }}" alt="Image d'accueil" style="float: left; margin-right: 20px;">
        
            </div>

            <h2>Université HEMI</h2>
<p>La Haute Ecole de Management et de l'Informatique (HEMI) est une institution d'enseignement supérieur privée située au Sénégal, spécialisée dans les domaines du management et de l'informatique.</p>
<p>Fondée pour répondre aux besoins croissants du marché en compétences en gestion d'entreprise et en technologies de l'information, HEMI a été établie avec l'objectif de fournir une éducation de qualité alignée sur les standards internationaux..</p>
    </section>
    </main>

</body>
</html>
