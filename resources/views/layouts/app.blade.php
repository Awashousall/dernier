<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Application</title>
    <!-- CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
<div class="bg-dark">
    <div class="container">
        <div class="row">
            <nav class="col navbar navbar-expand-lg navbar-dark">
                <img src="{{ asset('images/Capture1.PNG') }}" width="90" height="90" alt="Logo du site">
                <a class="navbar-brand text-primary" href="{{ url('/') }}">MediTeam</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link text-primary" href="{{ url('/accueil') }}">Accueil</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-primary" href="{{ url('/contact') }}">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link text-primary" href="{{ url('/logout') }}">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>

<div class="background-image">
    <div class="container mt-4">
        @yield('content')
    </div>
</div>

<div class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="list-inline text-center">
                    <li class="list-inline-item"><a href="#">À propos</a></li>
                    <li class="list-inline-item">&middot;</li>
                    <li class="list-inline-item"><a href="#">Vie privée</a></li>
                    <li class="list-inline-item">&middot;</li>
                    <li class="list-inline-item"><a href="#">Conditions d'utilisation</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
