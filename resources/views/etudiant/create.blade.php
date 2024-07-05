<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription pour une Bourse</title>
    <!-- Styles Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            background-image: url('https://www.villedeleforest.fr/wp-content/uploads/2022/01/Inscription-ecole.jpg');
            background-size: cover;
            background-position: center;
        }
        .container {
            max-width: 600px;
            margin-top: 50px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .label-blue {
            color: #007bff; /* Couleur bleue */
            font-weight: bold;
        }
        .title {
            color: #007bff; /* Couleur bleue */
            font-weight: bold;
            font-size: 24px; /* Taille du texte */
            text-align: center; /* Centrage du texte */
            margin-bottom: 20px; /* Marge en bas */
            text-transform: uppercase; /* En majuscules */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">S'inscrire pour une Bourse</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('etudiant.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nom" class="label-blue">Nom:</label>
                    <input type="text" class="form-control" id="nom" name="nom" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="prenom" class="label-blue">Prénom:</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email" class="label-blue">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="form-group">
        <label for="password_confirmation">Confirmation du mot de passe</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
    </div>

                <div class="form-group col-md-6">
                    <label for="telephone" class="label-blue">Numéro de Téléphone:</label>
                    <input type="text" class="form-control" id="telephone" name="telephone" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="adresse" class="label-blue">Adresse:</label>
                    <input type="text" class="form-control" id="adresse" name="adresse" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="universite" class="label-blue">Université:</label>
                    <input type="text" class="form-control" id="universite" name="universite" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="domaine" class="label-blue">Domaine:</label>
                    <input type="text" class="form-control" id="domaine" name="domaine" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="niveau" class="label-blue">Niveau:</label>
                    <select class="form-control" id="niveau" name="niveau" required>
                        <option value="Bac+1">Bac + 1</option>
                        <option value="Bac+2">Bac + 2</option>
                        <option value="Bac+3">Bac + 3</option>
                        <option value="Bac+4">Bac + 4</option>
                        <option value="Bac+5">Bac + 5</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="diplome_baccalaureat" class="label-blue">Diplôme Baccalauréat:</label>
                    <input type="file" class="form-control-file" id="diplome_baccalaureat" name="diplome_baccalaureat" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="autre_diplome" class="label-blue">Autre Diplôme:</label>
                    <input type="file" class="form-control-file" id="autre_diplome" name="autre_diplome">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="carte_identite" class="label-blue">Carte d'Identité ou Passeport:</label>
                    <input type="file" class="form-control-file" id="carte_identite" name="carte_identite" required>
                </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cv" class="label-blue">CV:</label>
                    <input type="file" class="form-control-file" id="cv" name="cv">
                </div>

                <div class="form-group col-md-6">
                    <label for="bulletins" class="label-blue">Bulletins (Seconde, Première, Terminale):</label>
                    <input type="file" class="form-control-file" id="bulletins" name="bulletins[]" multiple required>
                </div>
            </div>
                
            
            

            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
    </div>

    <!-- Scripts Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
