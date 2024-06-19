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
    <p><strong>Bulletins:</strong></p>
    <p><strong>Bulletins:</strong></p>
<ul>
    @if(is_array($etudiant->bulletins_paths))
        @foreach($etudiant->bulletins_paths as $bulletin)
            <li><a href="{{ Storage::url($bulletin) }}">Voir le fichier</a></li>
        @endforeach
    @else
        <li>No bulletins available.</li>
    @endif
</ul>

    @if($etudiant->autre_diplome_path)
        <p><strong>Autre Diplôme:</strong> <a href="{{ Storage::url($etudiant->autre_diplome_path) }}">Voir le fichier</a></p>
    @endif
</body>
</html>
