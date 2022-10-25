<?php
include "fonction.php";
session_start();
$pdo = connexion();
$idp = $_GET["idp"];
$idu = $_SESSION["idu"];
$stmt = $pdo->prepare("SELECT * FROM produit WHERE idp=?");
$stmt->execute([$idp]);
$ligne = $stmt->fetch();
$idrec = $ligne["idu"];
$mess = $_POST["mess"];
$stmt = $pdo->prepare("INSERT INTO messages VALUES (?,?,?,?,?)");
$stmt->execute([NULL,$idu,$idrec,$mess,date("Y-m-d H:i:s")]);
header("refresh:0;url=chat.php?idp=$idp");
?>