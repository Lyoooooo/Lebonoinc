<?php

function connexion()
{
    $pdo = new PDO('mysql:dbname=bonu;host=127.0.0.1', 'root', '');
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