<?php
include "fonction.php";
session_start();
$idu = $_SESSION["idu"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bonum.css">
    <link rel="icon" href="image/Bonumanguli5.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Modification de mes données</title>
</head>

<body>
    <?php
    $id = mysqli_connect("127.0.0.1", "root", "", "bonu");
    $res = mysqli_query($id, "select * from user where idu='$idu'");
    $ligne = mysqli_fetch_assoc($res);

    $nom = $ligne["nom"];
    $prenom = $ligne["prenom"];
    $pseudo = $ligne["pseudo"];
    $anniv = $ligne["anniv"];
    $mail = $ligne["mail"];
    $adresse = $ligne["adresse"];
    $ville = $ligne["ville"];
    $cp = $ligne["cp"];
    $tel = $ligne["tel"];
    $genre = $ligne["genre"];
    $mdp = $ligne["mdp"];
    ?>

    <div id="second">
        <div class="rounded shadow text-left">
            <div id="divmid">
                <div class="h1 text-center">
                    <h1>Votre compte</h1>
                    <div class="position-absolute top-0 end-0 p-3 m3">
                        <h5><a href="home.php">retour</a></H5>
                    </div>
                </div>
                <div class=text-end>
                    <form action="modifuser2.php" method="post">
                </div>
                <div class="d-grid gap-2 d-md-block text-center">
                    <img src="image/0.png" width="50">
                </div>

                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-footer">
                                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">reset</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">valider</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault01" class="form-label">Nom</label><span class="etoile">*</span>
                    <input type="text" name="nom" class="form-control" id="second" value="<?= $nom ?>" required>
                </div><br>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Prénom</label><span class="etoile">*</span>
                    <input type="text" name="prenom" class="form-control" id="second" value="<?= $prenom ?>" required>
                </div><br>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Pseudo</label><span class="etoile">*</span>
                    <input type="text" name="pseudo" class="form-control" id="second" value="<?= $pseudo ?>" required>
                </div><br>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Date de naissabce</label>
                    <input type="text" name="anniv" class="form-control" id="second" value="<?= $anniv ?>" required>
                </div><br>
                <div class="col-md-4">
                    <label for="validationDefaultUsername" class="form-label">Adresse mail</label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                        <input type="text" name="mail" class="form-control" id="second" aria-describedby="inputGroupPrepend2" value="<?= $mail ?>" disabled required>
                    </div>
                </div><br>
                <div class="col-md-6">
                    <label for="validationDefault03" class="form-label">Adresse Postale</label><span class="etoile">*</span>
                    <input type="text" name="adresse" class="form-control" id="second" value="<?= $adresse ?>" required>
                </div><br>
                <div class="col-md-6">
                    <label for="validationDefault03" class="form-label">Ville</label><span class="etoile">*</span>
                    <input type="text" name="ville" class="form-control" id="second" value="<?= $ville ?>" required>
                </div><br>
                <div class="col-md-3">
                    <label for="validationDefault04" class="form-label">Code postal</label><span class="etoile">*</span>
                    <input type="text" name="cp" class="form-control" id="second" value="<?= $cp ?>" required>
                    </select>
                </div><br>
                <div class="col-md-4">
                    <label for="validationDefault05" class="form-label">Numero de telephone</label>
                    <input type="text" name="tel" class="form-control" id="second" value="<?= $tel ?>" required>
                </div><br>
                <button type="button" class="btn btn-warning"><a href="modifmdp.php" style="text-decoration:none">Modifier mon mot de passe</a></button><br><br>

                <div class="d-grid gap-2 col-6 mx-auto">
                    <input class="btn btn-success text-center" type="submit" value="Modifier" name="bouton"><br><br>
                </div>
            </div>
        </div>
        <!-- <div class="corpsacc">
            <div class="bg-image" style="background-image: url('images/back1.png');
    height: 100vh">
            </div>
        </div> -->
    </div>
    <footer class='text-center text-white ' style='background-color: rgba(0, 0, 0, 0.904);color:white;'>
        <!-- Grid container -->
        <div class='container pt-4'>
            <!-- Section: Social media -->




            <!-- Section: Social media -->
            <section class='text-center text-light'>

                <p>
                    Bonumanguli est un site deposée par ECE Bachelor. <br>
                    Tous droits réservés.
                </p>



            </section>
        </div>
        <!-- Grid container -->




        <!-- Copyright -->
        <div class='text-center text-light p-3' style='background-color: rgba(0, 0, 0, 0.2);'>
            © 2022 M.V.S <br>
        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>