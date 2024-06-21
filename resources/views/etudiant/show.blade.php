<!DOCTYPE html>
<html>
<head>
    <title>Détails de l'étudiant</title>
</head>
<body>
    <h1>Détails de l'étudiant</h1>
    <p><strong>Nom:</strong> {{ $etudiant->nom }}</p>
    <p><strong>Prénom:</strong> {{ $etudiant->prenom }}</p>
    <p><strong>Email:</strong> {{ $etudiant->email }}</p>
    <p><strong>Téléphone:</strong> {{ $etudiant->telephone }}</p>
    <p><strong>Adresse:</strong> {{ $etudiant->adresse }}</p>
    <p><strong>Université:</strong> {{ $etudiant->universite }}</p>
    <p><strong>Domaine:</strong> {{ $etudiant->domaine }}</p>
    <p><strong>Niveau:</strong> {{ $etudiant->niveau }}</p>
    <p><strong>Statut:</strong> {{ $etudiant->statut }}</p>
    <p><strong>Diplôme Baccalauréat:</strong> <a href="{{ Storage::url($etudiant->diplome_baccalaureat_path) }}">Voir le fichier</a></p>
    <p><strong>Carte d'Identité ou Passeport:</strong> <a href="{{ Storage::url($etudiant->carte_identite_path) }}">Voir le fichier</a></p>
    <p><strong>Bulletin:</strong> <a href="{{ Storage::url($etudiant->bulletins_path) }}">Voir le fichier</a></p>
    @if ($etudiant->autre_diplome_path)
        <p><strong>Autre Diplôme :</strong> <a href="{{ Storage::url($etudiant->autre_diplome_path) }}" target="_blank">Voir le fichier</a></p>
    @endif

</body>
</html>
