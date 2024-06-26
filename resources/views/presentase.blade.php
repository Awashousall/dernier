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
                <img src="{{ asset('images/image10.jpg') }}" alt="Image d'accueil" style="width: 100px; height: auto;">
            </ul>
        </nav>
    </header>

    <main>
        <section id="accueil" class="section-white">
            <p class="welcome-text">Université IPROSI.</p>
            <div>
                <img src="{{ asset('images/image4.png') }}" alt="Image d'accueil" style="float: left; margin-right: 20px;">
        
            </div>

            <h2>Université IPROSI</h2>
<p>Unipro, également connue sous le nom d'Université Professionnel, est une institution d'enseignement supérieur basée au Sénégal. Fondée sur des principes d'éducation professionnelle, elle offre une gamme de programmes éducatifs spécialisés comprenant des Diplômes Techniques Supérieurs (DTS) et des Brevets de Technicien Supérieur (BTS).</p>


</section>
    </main>

    
</body>
</html>
