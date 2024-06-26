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
                <img src="{{ asset('images/bebe.jpeg') }}" alt="Image d'accueil" style="width: 100px; height: auto;">
            </ul>
        </nav>
    </header>

    <main>
        <section id="accueil" class="section-white">
            <p class="welcome-text"> BEBAEMPIRE.</p>
            <div>
                <img src="{{ asset('images/image4.png') }}" alt="Image d'accueil" style="float: left; margin-right: 20px;">
        
            </div>

            <h2> BEBAEMPIRE</h2>
<p>
Plus de 5 ans dans l'industrie de l'entrepreneuriat au Sénégal BEBA EMPIRE est une structure privée avec des secteurs à but lucratif comme nos différentes filiales et d'autres part nous sommes dans une assistance sociale pour accompagner l'émergence de l'entrepreneuriat au Sénégal et en Afrique

Nous sommes à plus de 12 membres exécutifs et une dizaine de professionnels facultatifs qui assure chaque jourla viabilité et l'avancement de cette structure.</p>


</section>
    </main>

    
</body>
</html>
