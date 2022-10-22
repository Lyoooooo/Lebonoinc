<?php
include "fonction.php";
session_start();
$idu = $_SESSION["idu"];
?>


<?php
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$pseudo = $_POST["pseudo"];
$adresse = $_POST["adresse"];
$ville = $_POST["ville"];
$cp = $_POST["cp"];
$tel = $_POST["tel"];


$id = mysqli_connect("127.0.0.1", "root", "", "bonu");
$req = "UPDATE `user` SET `nom` = '$nom', `prenom` = '$prenom',`pseudo` = '$pseudo',`ville` = '$ville',`cp` = '$cp',`tel` = '$tel', `adresse` = '$adresse' WHERE `user`.`idu` = $idu";
$resultat = mysqli_query($id, $req);

header("location:home.php");
?>


