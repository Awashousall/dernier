<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Université HEPO- La Formation</title>
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
                <img src="{{ asset('images/hepo.png') }}" alt="Image d'accueil" style="width: 200px; height: auto;">
            </ul>
        </nav>
    </header>

    <main>
        <section id="accueil" class="section-white">
            <p class="welcome-text">Université HEPO.</p>
            <div>
                <img src="{{ asset('images/image4.png') }}" alt="Image d'accueil" style="float: left; margin-right: 20px;">
        
            </div>

            <h2>Université HEPO</h2>
<p>L’Ecole des Hautes Etudes Polytechniques de Dakar est née de la volonté d’un groupe de professionnels de l’éducation et de la formation professionnelle. Très au fait des nouveaux besoins en matière d’offre d’emploi des entreprises publiques, privées, institutions et organismes internationaux, ce groupe qui a initié HEPO DAKAR a voulu apporter sur le paysage de l’enseignement supérieur et professionnel des filières différentes, qui n’ont été encore développées par aucune autre école ou université du pays, et même de la sous-région..</p>

    </section>
    </main>

</body>
</html>
