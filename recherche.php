<?php
include "fonction.php";
session_start();
$pdo = connexion();
headsimple();
$data = $pdo->query("SELECT DISTINCT tag FROM tag")->fetchAll();

$r = $_GET["r"];
$b = $_GET["b"];
if(isset($b) && !empty(trim($r))) {
  $words=explode(" ",trim($r));
  for ($i=0;$i<count($words);$i++) {
    $mot[$i] = "nomp like '%".$words[$i]."%'"; 
  }
  $res=$pdo->prepare("SELECT * FROM produit WHERE ".implode(" OR ", $mot));
  $res->setFetchMode(PDO::FETCH_ASSOC);
  $res->execute();
  $tab=$res->fetchAll();
  $afficher="oui";
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="image/Bonumanguli5.png"/>
  <link rel="stylesheet" href="bonum.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <title>Bonumanguli - Recherche</title>
</head>

<body id="second">
  <form class="d-flex" method="get" role="search">
    <select class="form-select" name="c">
      <option value="null">-----------</option>
    <?php
      foreach ($data as $tag) {  
    ?>
      <option value="<?php $tag['tag'] ?>"><?php echo $tag['tag'] ?></option>
    <?php
      }
    ?>
    </select>
    
    <input class="form-control me-2" name="r" type="search" value="<?php echo $r ?>" placeholder="Recherchez l'article de vos rêves">
    <button class="btn btn-outline-success" name="b" type="submit">Rechercher</button>
  </form>
  </div>
  <?php if (@$afficher == "oui") { ?>
  <div class="resultat">
    <div id="divmid">
    <div class="nbr"><h2 id="textprimal"><?=count($tab). " ".(count($tab)>1?"résultats trouvés":"résultat trouvé") ?></h2></div>
    <div class="container" style="width: 80%;">
      <div class="row">
      <?php foreach ($tab as $prod) { ?>
        <div class="col-4">
          <div id="annonce">
            <div class="card">
              <img src="<?php echo $prod["photo1"] ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $prod["nomp"] ?></h5><br>
                <h5 class="card-title"><?php echo $prod["prix"] ?>€</h5><br>
                <a href="detailprod.php?idp=<?php echo $prod["idp"] ?>" class="btn btn-primary">
                <img src="image/voir.png" width="20">Voir l'annonce</a>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>  
    </div>   
  </div>
  <?php } else {
    echo "<h2>Aucun article n'a été trouvé...</h2>";
  } ?>
</body>