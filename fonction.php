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


?>