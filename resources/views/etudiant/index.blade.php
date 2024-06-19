<!DOCTYPE html>
<html>
<head>
    <title>Liste des étudiants</title>
</head>
<body>
    <h1>Liste des étudiants inscrits</h1>
    <ul>
        @foreach($etudiants as $etudiant)
            <li>
                <a href="{{ route('etudiant.show', $etudiant->id) }}">{{ $etudiant->nom }} {{ $etudiant->prenom }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
