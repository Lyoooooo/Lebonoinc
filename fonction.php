<?php

function connexion()
{
    try {
        $pdo = new PDO('mysql:dbname=bonu;host=127.0.0.1;port=3307', 'root', ''); 
        $pdo->exec("SET CHARACTER SET utf8");
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
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