<?php
include "fonction.php";
session_start();
$pdo = connexion();
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

    <div class="head sticky-top">
        <nav class="navbar navbar-toggler navbar-light" id="primal">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-3 text-center">
                            <img src="image/Bonumanguli3.png" width="70"><br>
                            Η αρχαιότητα σε όλη τη διαδρομή
                        </div>
                        <div class="col-6 text-center">
                            <a class="navbar-brand" href="home.php" id="textthird">
                                <h2>Bonumanguli</h2>
                            </a>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Rechercher</button>
                            </form>
                        </div>
                        <div class="col-3 text-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6" id="textthird">
                                        <br><a href="favoris.php"><button class="btn btn-transparent" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img src="image/vide.png" width="37"></a></button><br>Mes favoris
                                    </div>
                                    <div class="col-6">
                                        <div class="dropdown">
                                            <a class="btn sdropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                <div id="textthird">
                                                    <?php
                                                    if (connecte() == false) {
                                                        echo "<a href='connexion.php' style='text-decoration:none' id='textthird'><img src='image/0.png' width='50'></button><br>Me Connecter</a> </div>";
                                                    } else {
                                                        echo "<a href='modifuser.php' style='text-decoration:none' id='textthird'><img src='image/0.png' width='50'></button><br>Mon Compte</a> </div>";
                                                    }

                                                    ?>

                                                    <!-- <div class="offcanvas offcanvas-end" style="background-color: #b22222;" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                                        <div class="offcanvas-header">
                                                            <h5 id="offcanvasRightLabel"></h5>
                                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>

                                                        </div>
                                                        <div class="offcanvas-body text-center my-5">
                                                            <div class="accordion" id="accordionExample">
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header" id="headingOne">
                                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                            MON COMPTE
                                                                        </button>
                                                                    </h2>
                                                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                                        <div class="accordion-body">
                                                                            <a href="modifdonnee.php">mon compte</a><br>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header" id="headingTwo">
                                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                            CONTACT
                                                                        </button>
                                                                    </h2>
                                                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                                        <div class="accordion-body">
                                                                            <p>
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                                                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                                                                </svg> mvs@gmail.com
                                                                            </p>
                                                                            <p>
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                                                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                                                </svg> 08.45.68.92.29
                                                                            </p>
                                                                            <p>
                                                                                <a href="#" class="text-decoration-none">

                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                                                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                                                                    </svg>
                                                                                    mvs_museee
                                                                                </a>
                                                                            </p>
                                                                            </button>
                                                                            <div class="btn-group">
                                                                                <button type="button" class="btn btn-outline-secondary">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                                                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                                                                    </svg>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <form action="" method="post">
                                                                        <div class="accordion-item">
                                                                            <h2 class="accordion-header" id="headingThree">
                                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                                    NOTER LE MUSEE
                                                                                </button>
                                                                            </h2>
                                                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                                                <div class="accordion-body">
                                                                                    <div class="rating">
                                                                                        <div class="rating">
                                                                                            <a href="modif3.php?note=5&idu=<?php echo "$idu" ?>" name="note" title="Donner 5 étoiles">☆</a>
                                                                                            <a href="modif3.php?note=4&idu=<?php echo "$idu" ?>" name="note" title="Donner 4 étoiles">☆</a>
                                                                                            <a href="modif3.php?note=3&idu=<?php echo "$idu" ?>" name="note" title="Donner 3 étoiles">☆</a>
                                                                                            <a href="modif3.php?note=2&idu=<?php echo "$idu" ?>" name="note" title="Donner 2 étoiles">☆</a>
                                                                                            <a href="modif3.php?note=1&idu=<?php echo "$idu" ?>" name="note" title="Donner 1 étoile">☆</a>
                                                                                        </div><br>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="position-absolute bottom-0 end-0 p-3 m3">
                                                                <h5><a href="deco.php">se déconnecter</a></H5>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </nav>
    </div>

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
                                <img src="<?php echo $prod1["photo1"]?>" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $prod1["nomp"]?></h5><br>
                                    <h5 class="card-title"><?php echo $prod1["prix"]?>€</h5><br>
                                    <a href="detailprod.php?idp=<?php echo $prod1["idp"]?>" class="btn btn-primary">
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
                                <img src="<?php echo $prod2["photo1"]?>" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $prod2["nomp"]?></h5><br><br>
                                    <h5 class="card-title"><?php echo $prod2["prix"]?>€</h5>
                                    <a href="detailprod.php?idp=<?php echo $prod2["idp"]?>" class="btn btn-primary">
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
                                <img src="<?php echo $prod3["photo1"]?>" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $prod3["nomp"]?></h5><br><br>
                                    <h5 class="card-title"><?php echo $prod3["prix"]?>€</h5>
                                    <a href="detailprod.php?<?php echo $prod3["idp"]?>" class="btn btn-primary">
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