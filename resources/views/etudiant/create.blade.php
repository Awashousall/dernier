<!DOCTYPE html>
<html>
<head>
    <title>Inscription pour une Bourse</title>
</head>
<body>
    <h1>S'inscrire pour une Bourse</h1>
    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('etudiant.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="telephone">Numéro de Téléphone:</label>
        <input type="text" id="telephone" name="telephone" required><br>

        <label for="adresse">Adresse:</label>
        <input type="text" id="adresse" name="adresse" required><br>

        <label for="universite">Université:</label>
        <input type="text" id="universite" name="universite" required><br>

        <label for="domaine">Domaine:</label>
        <input type="text" id="domaine" name="domaine" required><br>

        <label for="niveau">Niveau:</label>
        <select id="niveau" name="niveau" required>
            <option value="Bac+1">Bac + 1</option>
            <option value="Bac+2">Bac + 2</option>
            <option value="Bac+3">Bac + 3</option>
            <option value="Bac+4">Bac + 4</option>
            <option value="Bac+5">Bac + 5</option>
        </select><br>

        <label for="diplome_baccalaureat">Diplôme Baccalauréat:</label>
        <input type="file" id="diplome_baccalaureat" name="diplome_baccalaureat" required><br>

        <label for="carte_identite">Carte d'Identité ou Passeport:</label>
        <input type="file" id="carte_identite" name="carte_identite" required><br>

        <label for="bulletins">Bulletins (Seconde, Première, Terminale):</label>
        <input type="file" id="bulletins" name="bulletins[]" multiple required><br>

        <label for="autre_diplome">Autre Diplôme:</label>
        <input type="file" id="autre_diplome" name="autre_diplome"><br>

        <button type="submit">S'inscrire</button>
    </form>
</body>
</html>
