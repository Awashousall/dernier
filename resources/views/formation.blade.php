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
                <li><a href="#">ACCUEIL</a></li>
                <li><a href="{{ route('presentation') }}">PRÉSENTATION</a></li>
                <li><a href="{{ route('forme') }}">FORMATION</a></li>
                <li><a href="{{ route('etudiant.create') }}">S'INSCRIRE</a></li>
            </ul>
        </nav>
    </header>

    <main>
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

    </main>

    <footer>
        <p>&copy; 2024 Université Dakar-Bourguiba. Tous droits réservés.</p>
    </footer>
</body>
</html>
