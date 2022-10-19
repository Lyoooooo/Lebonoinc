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
    <title>Modification de mon mot de passe</title>
</head>

<body>
    <?php
    $id = mysqli_connect("127.0.0.1", "root", "", "bonu");
    $res = mysqli_query($id, "select * from user where idu='$idu'");
    $ligne = mysqli_fetch_assoc($res);

    $mdp = $ligne["mdp"];
    ?>

    <div id="second">
        <div class="rounded shadow text-left">
            <div id="divmid">
                <div class="h1 text-center">
                    <h1>Votre compte</h1>
                    <div class="position-absolute top-0 end-0 p-3 m3">
                        <h5><a href="modifmdp2.php">retour</a></H5>
                    </div>
                </div>
                <div class=text-end>
                    <form action="modifuser2.php" method="post">
                </div>
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                </div>
                <div class="col-md-4">
                    <label for="validationDefault01" class="form-label">Ancien mot de passe</label><span class="etoile">*</span>
                    <input type="password" name="mdp" class="form-control" minlength="10" id="second" required>
                </div><br>
                <div class="col-md-4">
                    <label for="validationDefault01" class="form-label">Nouveaun mot de passe</label><span class="etoile">*</span>
                    <input type="password" name="mdp2" class="form-control" minlength="10" id="second" required>
                </div><br>
                <div class="col-md-4">
                    <label for="validationDefault01" class="form-label">Confirmer votre nouveau mot de passe</label><span class="etoile">*</span>
                    <input type="password" name="mdp3" class="form-control" minlength="10" id="second" required>
                </div><br>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <input class="btn btn-success text-center" type="submit" value="Modifier" name="bouton"><br><br>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST["bouton"])) {
        extract($_POST);
        $mdp = encode($mdp, $mail);
        if ($mdp) {
        }

        if ($mdp2 == $mdp3) {
        }
        // $sql = "UPDATE `user` SET `mdp` = '$mdp'WHERE `user`.`idu` = $idu";
        // $pdo->prepare($sql)->execute([null, "", "", "", $mdp2, "", "", "", "", "","" ,"", 0, 0]);
        // echo "modification du mot de passe réussis ! <br>";
    }
    ?>

    <footer class='text-center text-white ' style='background-color: rgba(0, 0, 0, 0.904);color:white;'>
        <div class='container pt-4'>
            <section class='text-center text-light'>
                <p>
                    Bonumanguli est un site deposée par ECE Bachelor. <br>
                    Tous droits réservés.
                </p>
            </section>
        </div>
        <div class='text-center text-light p-3' style='background-color: rgba(0, 0, 0, 0.2);'>
            © 2022 M.V.S <br>
        </div>
    </footer>
</body>

</html>