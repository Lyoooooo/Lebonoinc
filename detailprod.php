<?php
include "fonction.php";
session_start();
$pdo = connexion();
$idp = $_GET["idp"];
$stmt = $pdo->prepare("UPDATE produit SET vu = vu + 1 WHERE idp=?");
$stmt->execute([$idp]);
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

    <title>Bonumanguli</title>
</head>

<body id="second">

    <?php
    bighead($_SESSION["idu"]);
    $stmt = $pdo->prepare("SELECT * FROM produit WHERE idp=?");
    $stmt->execute([$idp]);
    $ligne = $stmt->fetch();
    $titre = $ligne["nomp"];
    $desc = $ligne["descri"];
    $prix = $ligne["prix"];
    $etat = $ligne["etat"];
    $photo1 = $ligne["photo1"];
    $photo2 = $ligne["photo2"];
    $photo3 = $ligne["photo3"];
    ?>



    <div id="divmid">
        <div id="ann">

            <div class="container" style="padding: 3%;">
                <div class="row">

                    <div class="col-3">

                    </div>

                    <div class="col-6">
                        <h3>Détail Annonce</h3>
                    </div>

                    <div class="col-3">

                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true" style="background-color: #EFF4FB; width:600px; height: 300px;">
                        <div class="carousel-indicators">
                            <?php
                            if ($photo2 != "") {
                            ?>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <?php } ?>
                            <?php
                            if ($photo3 != "") {
                            ?>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <?php } ?>
                        </div>
                        <div class="carousel-inner position-relative top-0 start-0">
                            <div class="carousel-item active">
                                <img src="<?php echo "$photo1" ?>" height="300" class="d-block w-5" style="margin:auto">
                            </div>
                            <?php
                            if ($photo2 != "") {
                            ?>
                                <div class="carousel-item">
                                    <img src="<?php echo "$photo2" ?>" width="300" class="d-block w-5" style="margin:auto">
                                </div>
                            <?php } ?>
                            <?php
                            if ($photo3 != "") {
                            ?>
                                <div class="carousel-item">
                                    <img src="<?php echo "$photo3" ?>" width="300" class="d-block w-5" style="margin:auto">
                                </div>
                            <?php } ?>
                        </div>
                        <?php
                        if ($photo2 != "") {
                        ?>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        <?php } ?>
                    </div>
                </div>

                <div class="col-6">
                    <h3 id="textthird"><?php echo "$titre" ?></h3>
                    <div style="text-align: left;">
                        <span style="word-wrap: break-word;"><?php
                                                                echo "$desc";
                                                                ?></span>
                    </div>


                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <a class="btn" id="third">Etat : <?php echo "$etat" ?></a>
                </div>
                <div class="col">
                    <a class="btn" id="third">Prix : <?php echo "$prix" ?>€</a>
                </div>
            </div>
        </div><br>
        <a href="chat.php">Contacter le vendeur</a>
    </div>

    <br><br><br>

    </div>
    </div>

    <?php
    foot();
    ?>

</body>

</html>