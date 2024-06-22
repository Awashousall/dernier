<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Site de SUNU Cabinet')</title>
    <link rel="stylesheet" href="{{ asset('css/stylee.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
    <header>
        <img src="images/capture1.png" alt="Logo" class="reduced-image">
    </header>

    <!-- Affichage des messages de confirmation ou d'erreur -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @yield('content')

    <footer>
        <h1 class="title">Notre Cabinet</h1>
        <div class="contact">
            <!-- Vos informations de contact ici -->
        </div>
        <div class="address">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1989.1898072295844!2d-17.46367698456441!3d14.692875995647446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e89df179d28b1ad%3A0x6abf0f9b0a2e7f8d!2sDakar%2C%20S%C3%A9n%C3%A9gal!5e0!3m2!1sen!2s!4v1653980413179!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </footer>
    <div class="end">
        <p>Réalisé par @AWAAMINAABY</p>
    </div>
</body>
</html>
