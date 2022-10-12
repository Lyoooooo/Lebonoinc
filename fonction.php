<?php

function connexion()
{
    try {
        $pdo = new PDO('mysql:dbname=bonu;host=127.0.0.1', 'root', ''); 
    } catch (PDOException $e) {
        $pdo = new PDO('mysql:dbname=bonu;host=127.0.0.1:3700', 'root', '');
    }
    return $pdo;
}

function connecte()
{
    if(!isset($_SESSION["idu"]))
    {
        return(0);
    }else return(1);
}

?>