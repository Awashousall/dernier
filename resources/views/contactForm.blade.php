<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px; /* Ajustement pour le positionnement */
            background-image: url('/images/ins1.png'); /* Ajout de l'image de fond */
            background-size: cover; /* Assure que l'image de fond couvre tout le conteneur */
        }
        .form-group label {
            font-weight: bold;
            font-style: italic;
            color: blue;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .text-danger {
            font-size: 0.875em;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="/images/Capture1.PNG" alt="Logo" style="max-width: 60px; max-height: 60px;">
        <h2 class="text-center mb-4" style="color: blue;">Formulaire de Contact</h2>
        <form action="{{ route('send.email') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" name="name" placeholder="Entrez votre nom" value="{{ old('name') }}" required>
                        @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Votre Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Entrez votre email" value="{{ old('email') }}" required>
                        @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient_email">Email du Destinataire</label>
                        <input type="email" class="form-control" name="recipient_email" placeholder="Entrez l'email du destinataire" value="{{ old('recipient_email') }}" required>
                        @error('recipient_email')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="subject">Sujet</label>
                        <input type="text" class="form-control" name="subject" placeholder="Entrez le sujet" value="{{ old('subject') }}" required>
                        @error('subject')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" class="form-control" cols="4" rows="4" placeholder="Entrez votre message" required>{{ old('message') }}</textarea>
                @error('message')<span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label for="attachment">Fichier(s) joint(s)</label>
                <input type="file" class="form-control-file" name="attachment[]" multiple>
                @error('attachment')<span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
        </form>
    </div>
</body>
</html>
