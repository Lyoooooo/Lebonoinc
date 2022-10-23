<?php
include "fonction.php";
session_start();
// if (connecte() == False) {
//   header("refresh:0;url=connexion.php");
// }
$pdo = connexion();
$extensions = array( 'jpg' , 'jpeg' , 'png' );
headsimple();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="image/Bonumanguli5.png" />
  <title>Favoris</title>
  <link rel="stylesheet" href="bonum.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body id="second">
  <div id="divmid">
    <h1 style="text-align: center;" id="textthird">Vos favoris</h1>

    <?php
        $idu = $_SESSION["idu"];
        $stmt = $pdo->prepare("SELECT * FROM fav WHERE idu=?");
        $stmt->execute([$idu]);
        while($ligne = $stmt->fetch()){
            $stmt2 = $pdo->prepare("SELECT * FROM produit WHERE idp=?");
            $stmt2->execute([$ligne["idp"]]);
            $ligne2 = $stmt2->fetch();
            $link = $ligne2["photo1"]; 
            $nomp = $ligne2["nomp"]; 
            ?>
                <div id="prodfav">
                    <hr>
                        <img src="<?php echo"$link"?>" width="50">
                        <?php echo"$nomp"?>
                    <hr>
                </div>
            <?php
        }
    //     if ($ligne) {
    //         session_start();
    //         $_SESSION["idu"] = $ligne["idu"];
    //         $_SESSION["nom"] = $ligne["nom"];
    //         $_SESSION["prenom"] = $ligne["prenom"];
    //         $_SESSION["grade"] = $ligne["grade"];
    //         header("location:home.php");
    //         // if ($_SESSION["grade"] == 1) {
    //         //     header("location:admin.php");
    //         // } else {
    //         //     
    //         // }
    //     } else {
    //         echo "Mail ou mot de passe incorrect !";
    //     }
    // ?>
  </div>
</body>
</html>