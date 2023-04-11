<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDO - Ajout</title>
</head>
<body>

    <h1>Saisie d'un nouvel artiste</h1>

    <a href="artists.php"><button>Retour à la liste des artistes</button></a>

    <br>
    <br>

    <body>
    <div class="background_artist_new">
        <h2>Saisie d'un nouvel artiste</h2>


        <form class="m-0" action ="/artist/script_artist_ajout.php" method="post">

            <label class="form-label" for="nom_for_label">Nom de l'artiste :</label><br>
            <input class="form-control input_artist_new" type="text" name="nom" id="nom_for_label">

            <label class="form-label" for="url_for_label">Adresse site internet :</label><br>
            <input class="form-control input_artist_new" type="text" name="url" id="url_for_label">

            <input class="btn bouton mt-2" type="submit" value="Ajouter">

        </form>
        
        <a class="btn bouton mt-2" href="index.php?page=artist">Revenir à la liste des artistes</a>
    </div>
</body>
</html>