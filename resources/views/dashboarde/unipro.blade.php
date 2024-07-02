<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des étudiants inscrits à Unipro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        /* Vos styles CSS personnalisés ici */
    </style>
</head>
<body>
    <div class="container">
        <h1>Liste des étudiants inscrits à l'université Unipro</h1>
          
        <!-- Formulaire de recherche par domaine -->
        <form action="{{ route('etudiants.search') }}" method="GET" class="form-inline mb-3">
            <div class="input-group">
                <input type="text" class="form-control" id="domaine" name="domaine" placeholder="Rechercher par domaine...">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>

        <!-- Liste des étudiants -->
        <ul class="list-group">
            @foreach($etudiants as $etudiant)
                <li class="list-group-item">
                    <a href="{{ route('etudiant.show', ['id' => $etudiant->id]) }}">
                        <span style="font-style: italic; font-weight: bold;">{{ $etudiant->nom }} {{ $etudiant->prenom }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <!-- Scripts Bootstrap (ne pas modifier) -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
