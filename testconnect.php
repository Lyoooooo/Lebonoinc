<?php
include "fonction.php";

$pdo = connexion();
$idp = 2;
$tag = 'éùà';

$sql = "INSERT INTO tag VALUES (?,?,?)";
$pdo->prepare($sql)->execute([null, $idp, $tag]);
