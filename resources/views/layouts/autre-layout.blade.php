<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Autre Layout</title>
    <!-- Exemple de lien vers des styles CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Exemple de lien vers des scripts JavaScript -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <header>
        <!-- Entête de votre site -->
        <nav>
            <!-- Barre de navigation -->
            <ul>
                <li><a href="/">Accueil</a></li>
                <!-- Liens de navigation supplémentaires -->
            </ul>
        </nav>
    </header>

    <main>
        <!-- Contenu principal de la page -->
        @yield('content')
    </main>

    <footer>
        <!-- Pied de page -->
        <p>&copy; 2024 Mon Entreprise. Tous droits réservés.</p>
    </footer>
</body>
</html>
