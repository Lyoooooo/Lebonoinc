<?php

function connexion()
{
    try {
        $pdo = new PDO('mysql:dbname=bonu;host=127.0.0.1', 'root', ''); 
        $pdo->exec("SET CHARACTER SET utf8mb4");
    } catch (PDOException $e) {
        $pdo = new PDO('mysql:dbname=bonu;host=127.0.0.1;port=3307', 'root', ''); 
        $pdo->exec("SET CHARACTER SET utf8mb4");
    }
    return $pdo;
}

function encode($mdp, $mail)
{
    $salt = "@|-°+==00001ddQ";
    $crypt = md5($mdp . $salt . $mail);
    return $crypt;
}

function connecte()
{
    if(!isset($_SESSION["idu"]))
    {
        return(0);
    }else return(1);
}

?>