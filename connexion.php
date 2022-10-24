<?php
include "fonction.php";
$pdo = connexion();
if (isset($_POST["bouton"])) {
    extract($_POST);
    $mdp2 = encode($mdp, $mail);
    $stmt = $pdo->prepare("SELECT * FROM user WHERE mail=? AND mdp=?");
    $stmt->execute([$mail, $mdp2]);
    $ligne = $stmt->fetch();
    if ($ligne) {
        session_start();
        $_SESSION["idu"] = $ligne["idu"];
        $_SESSION["nom"] = $ligne["nom"];
        $_SESSION["prenom"] = $ligne["prenom"];
        $_SESSION["grade"] = $ligne["grade"];
        header("location:home.php");
    } else {
        echo "Mail ou mot de passe incorrect !";
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
    <title>Connexion</title>
    <link rel="stylesheet" href="bonum.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body id="second">
    <div class="divmid">
        <div class="row g-3 position-absolute top-50 start-50 translate-middle rounded shadow text-center" id="primal">
            <div class="h1">
                <h1>Formulaire de connexion</h1>
            </div>
            <hr>
            <div class="container">
                <form action="" method="post">
                    <input type="email" name="mail" style="width:250px" placeholder="Entrez votre mail:" required>
                    <input type="password" style="width:250px" name="mdp" placeholder="Entrez votre mot de passe: " required> <br><br>
                    <input type="reset" value="ANNULER">&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="submit" value="ENVOYER" name="bouton"> <br> <br>
                </form>
                <div class='text-start'>
                    Pas de compte?<a href="inscription.php" class="btn btn-primary p-2 m-2">S'INSCRIRE</a>
                </div>
            </div>
        </div>

        <div class="corpsacc">
            <div class="bg-image" style="background-image: url('images/back1.png');
            height: 100vh">
            </div>
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
            <div class='text-center text-light p-3' style='background-color: rgba(0, 0, 0, 0.2);'>
                © 2022 M.V.S <br>
                <!-- Mentions légales : -->
                <!-- <a href="https://www.flaticon.com/fr/icones-gratuites/avatar" title="avatar icônes">Avatar icônes créées par Prosymbols Premium - Flaticon</a> -->
            </div>
        </footer>
</body>

</html>