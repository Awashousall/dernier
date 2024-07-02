<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Hôpital</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body {
            background-image: url('{{ asset('images/tele.jpg') }}');
            background-size: cover;
            color: white;
        }
        .container {
            background-color: rgba(0, 0, 128, 0.7); /* Bleu avec opacité */
            padding: 20px;
            border-radius: 10px;
            margin-top: 50px;
        }
        .container h1, .container p, .container a {
            color: white;
        }
        .logo {
            display: block;
            margin: 0 auto 20px;
        }
        .contact-info {
            background-color: rgba(255, 255, 255, 0.1); /* Blanc avec opacité */
            padding: 20px;
            border-radius: 10px;
        }
        .contact-info h3 {
            color: white;
        }
    </style>
</head>
<body>
<div class="container text-center">
    <img src="{{ asset('images/Capture1.PNG') }}" alt="Logo" class="logo" width="150">
    <h1>Contactez-nous</h1>
    <p class="lead">N'hésitez pas à nous contacter pour toute question ou demande.</p>
    <div class="row justify-content-center">
        <div class="col-md-6 contact-info">
            <h3>Coordonnées</h3>
            <p><strong>SUNU CABINET</strong><br>
            PIKINE TALLY BOU BESS<br>
            DAKAR, 2905<br>
            <strong>Téléphone :</strong> 772145963<br>
            <strong>Email :</strong> <a href="mailto:awasall@gmail.com">awasall@gmail.com</a></p>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
