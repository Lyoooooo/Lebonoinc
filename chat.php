<?php
include "fonction.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bonum.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="bonum.js"></script>

</head>

<body>
    <div class="body">
        <?php
        chat();
        ?>
        <?php
        $id = mysqli_connect("127.0.0.1", "root", "", "bonu");
        $res = mysqli_query($id, "select * from user where idu='4'");
        $ligne = mysqli_fetch_assoc($res);

        $nom = $ligne["nom"];
        $prenom = $ligne["prenom"];
        ?>
    </div>
</body>

</html>