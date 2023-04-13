<?php
// On se connecte à la BDD via notre fichier db.php :
require "db.php";
$db = connexionBase();

// On récupère l'ID passé en paramètre :
$id = $_GET["id"];

// On crée une requête préparée avec condition de recherche :
$requete = $db->prepare("SELECT * FROM artist WHERE artist_id=?");
// on ajoute l'ID du disque passé dans l'URL en paramètre et on exécute :
$requete->execute(array($id));

// on récupère le 1e (et seul) résultat :
$myArtist = $requete->fetch(PDO::FETCH_OBJ);

// on clôt la requête en BDD
$requete->closeCursor();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO - Détail</title>
</head>

<body>
    <h1>http://localhost/code/ncode/artist_detail.php?id=5</h1>
    <form>
        <div>
            <div><label>Artiste N° : </label> <input type="text" name="id"></div><br>
            <div><button type="submit"> afficher information artist</button></div>
            <div>
                <div>Nom de l'artiste :</div>
                <div> <?= $myArtist->artist_name ?></div>
            </div>
            <div>
                <div> Site Internet :</div>
                <div><?= $myArtist->artist_url ?></div>
            </div>
        </div>
    </form>
</body>

</html>
<?php
?>