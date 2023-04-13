<?php
    // en haut de page, avec la requête :
   // $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
  //  var_dump($tableau);
    // on importe le contenu du fichier "db.php"
    include 'db.php';
    // on exécute la méthode de connexion à notre BDD
    $db = connexionBase();

    // on lance une requête pour chercher toutes les fiches d'artistes
    $requete = $db->query('SELECT * FROM artist');
    // on récupère tous les résultats trouvés dans une variable
    $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
    // on clôt la requête en BDD
    $requete->closeCursor();

?>

<?php

session_start();

if (!isset($_SESSION['name'])) {
  header('location: ./index.php');
  exit;
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO - Liste</title>
</head>
<body>

<h1>Information Artist</h1>
<a href="/artist_detail.php?" <?= $artist->artist_id ?>>Visit W3Schools.com!</a>

<button onclick ="document.location='ncode/script_artist_ajout.php?page=artist_detail'"><?= $artist->artist_id ?> read artist  </button>
<button onclick ="document.location='localhost/code/ncode/script_artist_ajout.php'"> supprimer artist  </button>
<button onclick ="document.location='localhost/code/ncode/script_artist_delete.php'"> ajouter artist  </button>
<button onclick ="document.location='localhost/code/ncode/script_artist_modif.php'"> modifier artist  </button>

<?php foreach ($tableau as $alo): ?> <?= $alo->artist_id ?> <?php endforeach; ?>
    <table style="border: 1px solid ; margin-top: 100px;">
        <tr style="border: 1px solid;">
            <th  style="border: 1px solid;">ID</th>
            <th  style="border: 1px solid;">Nom</th>
            <th  style="border: 1px solid;">URL</th>
            <th  style="border: 1px solid;">image</th>
            <th  style="border: 1px solid;">Données Brut artist</th>
        </tr>

        <?php foreach ($tableau as $artist): ?>

            <!-- <td><img class="img-responsive jaquette_index" src="jaquettes/<?= $disc->disc_picture ?>"></td> -->

            <tr  style="border: 1px solid;">
                <td  style="border: 1px solid;"><?= $artist->artist_id ?></td>
                <td  style="border: 1px solid;"><?= $artist->artist_name ?></td>
                <td  style="border: 1px solid;"><?= $artist->artist_url ?></td>
                <td  style="border: 1px solid;"><img src="<?= $artist->artist_img?>" width="50" height="60"></td>
                <td  style="border: 1px solid;">  <?php var_dump($artist); // Le var_dump() est écrit à titre informatif ?></td>

            </tr>

        <?php endforeach; ?>

    </table>
    <a href="./logout.php" class="information__button">Logout</a>
</body>
</html>