<?php
include "fonction.php";
session_start();
$pdo = connexion();
headsimple();
$rec = $_GET["rec"];
$bt =$_GET["bt"];
if(isset($bt) && !empty(trim($rec))) {
  $words=explode(" ",trim($rec));
  for ($i=0;$i<count($words);$i++) {
    $mot[$i] = "nomp like '%".$words[$i]."%'"; 
  $res=$pdo->prepare("SELECT * FROM produit WHERE ".implode(" OR ", $mot));
  $res->setFetchMode(PDO::FETCH_ASSOC);
  $res->execute();
  $tab=$res->fetchAll();
  $afficher="oui";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="image/Bonumanguli5.png" />
  <link rel="stylesheet" href="bonum.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <title>Bonumanguli - Recherche</title>
</head>

<body>
  <form class="d-flex" method="get" role="search">
    <input class="form-control me-2" name="rec" type="search" value="<?php echo $rec ?>" placeholder="Recherchez l'article de vos rêves" aria-label="Search">
    <button class="btn btn-outline-success" name="bt" type="submit">Rechercher</button>
  </form>

  <?php if (@$afficher == "oui") { ?>
  <div class="resultat">
    <div class="nbr"><?=count($tab). " ".(count($tab)>1?"résultats trouvés":"résultat trouvé") ?></div>
      
    <div class="container" style="width: 80%;">
      <div class="row">
      <?php for ($i=0;$i<count($tab);$i++) { ?>
        <div class="col-3">
          <div id="annonce">
            <div class="card">
              <img src="<?php echo $tab[$i]["photo1"] ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $tab[$i]["nomp"] ?></h5><br>
                <h5 class="card-title"><?php echo $tab[$i]["prix"] ?>€</h5><br>
                <a href="detailprod.php?idp=<?php echo $tab[$i]["idp"] ?>" class="btn btn-primary">
                <img src="image/voir.png" width="20">Voir l'annonce</a>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>     
  </div>
  <?php } else {
    echo "Non";
  } ?>
</body>