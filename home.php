<?php
include "fonction.php";
session_start();
$pdo = connexion();
headermain();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=0.5">
  <link rel="icon" href="image/Bonumanguli5.png"/>
  <link rel="stylesheet" href="bonum.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <title>Bonumanguli</title>
</head>

<body id="second">
    <div id="divmid">
        <div id="divannonce">

            <div class="container" style="padding: 3%;">
                <div class="row">

                    <div class="col-3">
                        <a class="btn" href="ajoutprod.php" role="button" id="third">
                            <img src="image/plus.png" width="20">
                            Déposer une annonce</a>
                    </div>

                    <div class="col-6">
                        <h3>Annonces récentes</h3>
                    </div>

                    <div class="col-3">

                    </div>
                </div>
            </div>

            <?php
            $stmt = $pdo->prepare("SELECT * FROM produit ORDER BY vu");
            $stmt->execute();
            $prod1 = $stmt->fetch();
            $prod2 = $stmt->fetch();
            $prod3 = $stmt->fetch();
            ?>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div id="annonce">
                            <div class="card">
                                <img src="<?php echo $prod1["photo1"] ?>" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $prod1["nomp"] ?></h5><br>
                                    <h5 class="card-title"><?php echo $prod1["prix"] ?>€</h5><br>
                                    <a href="detailprod.php?idp=<?php echo $prod1["idp"] ?>" class="btn btn-primary">
                                        <img src="image/voir.png" width="20">
                                        Voir l'annonce
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div id="annonce">
                            <div class="card">
                                <img src="<?php echo $prod2["photo1"] ?>" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $prod2["nomp"] ?></h5><br><br>
                                    <h5 class="card-title"><?php echo $prod2["prix"] ?>€</h5>
                                    <a href="detailprod.php?idp=<?php echo $prod2["idp"] ?>" class="btn btn-primary">
                                        <img src="image/voir.png" width="20">
                                        Voir l'annonce
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <<div class="col">
                        <div id="annonce">
                            <div class="card">
                                <img src="<?php echo $prod3["photo1"] ?>" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $prod3["nomp"] ?></h5><br><br>
                                    <h5 class="card-title"><?php echo $prod3["prix"] ?>€</h5>
                                    <a href="detailprod.php?<?php echo $prod3["idp"] ?>" class="btn btn-primary">
                                        <img src="image/voir.png" width="20">
                                        Voir l'annonce
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>


    </div>
    </div>

    <?php
    foot();
    ?>

</body>

</html>