<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Site de SUNU Cabinet')</title>
    <link rel="stylesheet" href="{{ asset('css/stylee.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <style>
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .nav-links {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        .nav-links li {
            margin-left: 20px;
        }
        .nav-links a {
            text-decoration: none;
            color: blue; /* Change color as needed */
        }
        .footer-content {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            margin-top: 20px;
        }
        .footer-left {
            flex: 1;
            margin-right: 20px;
        }
        .footer-right {
            flex: 1;
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-end;
        }
        .partners {
            margin-top: 20px;
        }
        .partners img {
            width: 100px; /* Adjust size as needed */
            height: 100px;
            margin-right: 10px;
            border: 2px solid #333; /* Example border */
            border-radius: 50%; /* For circular frames */
        }
    </style>
</head>
<body>
    <header class="header">
        <img src="images/capture1.png" alt="Logo" class="reduced-image">
        <nav>
            <ul class="nav-links">
                <li><a href="{{ route('login')}}">Login</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="{{ route('contacte') }}" class="btn btn-primary">Contact</a>
                </li>
            </ul>
        </nav>
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
        <div class="footer-content">
            <div class="footer-left">
                <h1 class="title">Notre Cabinet</h1>
                <div class="contact">
                    <!-- Vos informations de contact ici -->
                </div>
                <div class="address">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1989.1898072295844!2d-17.46367698456441!3d14.692875995647446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e89df179d28b1ad%3A0x6abf0f9b0a2e7f8d!2sDakar%2C%20S%C3%A9n%C3%A9gal!5e0!3m2!1sen!2s!4v1653980413179!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            
            <div class="footer-right">
                <!-- Sentence from partners -->
                <div  class="title">
                    <p>Nos partenaires</p>
                </div>

                <!-- Images encadrées -->
                <div>
                    <img src="{{ asset('images/image10.jpg') }}" alt="Logo" style="width: 100px; height: auto;">
                    <img src="{{ asset('images/hepo.png') }}" alt="Logo" style="width: 200px; height: auto;">
                    <img src="{{ asset('images/ipros.png') }}" alt="Logo" style="width: 200px; height: auto;">
                    <img src="{{ asset('images/bebe.jpeg') }}" alt="Logo" style="width: 200px; height: auto;">
                    <img src="{{ asset('images/hemi.png') }}" alt="Image d'accueil" style="width: 100px; height: auto;">
                </div>
            </div>
        </div>
    </footer>
    
    <div class="end">
        <p>Réalisé par @AWAAMINAABY</p>
    </div>
</body>
</html>
