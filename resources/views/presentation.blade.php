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
            <p class="welcome-text">Université Dakar-Bourguiba.</p>
            <div>
                <img src="{{ asset('images/image4.png') }}" alt="Image d'accueil" style="float: left; margin-right: 20px;">
        
            </div>

            <h2>Université Dakar-Bourguiba</h2>
            <p>Première université privée du Sénégal, l'UDB est un établissement d'enseignement supérieur privé, laïque et apolitique jouissant de la personnalité juridique et d'une autonomie financière.</p>
            <p>Elle a été créée en 1995 par l'éminent Professeur Sakhir THIAM, agrégé de Mathématiques de l'Université de Paris, Docteur d'Etat ès Sciences Mathématiques et Docteur d'Etat en économie théorique des Universités Paris VI et Paris IX Dauphine, Homme des Arts et des Lettres. Soucieux de contribuer à l'épanouissement général de l'individu, à certains déblocages psychologiques, l'UDB intègre les éléments suivants : enseignement universitaire professionnalisé multidisciplinaire et exécuté selon trois sessions de formation (hiver, printemps, été). Implantée sur un site attrayant, l'environnement de l'UDB est vert avec un plus d'aménagement floral.</p>
            <p>L'Université Dakar Bourguiba présente tous les avantages liés à sa localisation dans l'arrondissement résidentiel de Grand Dakar, tout en étant insérée dans une zone où la moyenne industrie et les entreprises de service conservent toute leur place. La localisation géographique correspond à une zone stratégique à tout point de vue : un lieu d'implantation de plusieurs activités commerciales (banques, assurances, cabinets d'affaires, distribution pétrolière, services de télécommunication), un lieu de résidence à loyers accessibles pour les étudiants et un lieu bien desservi par les transports en commun réguliers.</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Université Dakar-Bourguiba. Tous droits réservés.</p>
    </footer>
</body>
</html>
