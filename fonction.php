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
        return(False);
    }else return(True);
}

function foot(){
    ?>
    <div class="corpsacc sticky-bottom">
        <footer class='text-center text-white ' style='background-color: rgba(0, 0, 0, 0.904);color:white;'>
            <!-- Grid container -->
            <div class='container pt-4'>
                <!-- Section: Social media -->
                <section class='mb-4'>
                    <!-- Facebook -->
                    <a class='btn btn-link btn-floating btn-lg text-light m-1' href='#!' role='button' data-mdb-ripple-color='light'><i class='bi bi-facebook'></i></a>

                    <!-- Twitter -->
                    <a class='btn btn-link btn-floating btn-lg text-light m-1' href='#!' role='button' data-mdb-ripple-color='light'><i class='bi bi-twitter'></i></a>

                    <!-- Google -->
                    <a class='btn btn-link btn-floating btn-lg text-light m-1' href='#!' role='button' data-mdb-ripple-color='light'><i class='bi bi-google'></i></a>

                    <!-- Instagram -->
                    <a class='btn btn-link btn-floating btn-lg text-light m-1' href='#!' role='button' data-mdb-ripple-color='light'><i class='bi bi-instagram'></i></a>

                    <!-- Linkedin -->
                    <a class='btn btn-link btn-floating btn-lg text-light m-1' href='#!' role='button' data-mdb-ripple-color='light'><i class='bi bi-linkedin'></i></a>
                    <!-- Github -->
                    <a class='btn btn-link btn-floating btn-lg text-light m-1' href='#!' role='button' data-mdb-ripple-color='light'><i class='bi bi-github'></i></a>
                </section>



                <!-- Section: Social media -->
                <section class='text-center text-light'>

                    <p>
                        Bonumanguli est un site deposée par ECE Bachelor. <br>
                        Tous droits réservés.
                    </p>



                </section>
            </div>
            <!-- Grid container -->




            <!-- Copyright -->
            <div class='text-center text-light p-3' style='background-color: rgba(0, 0, 0, 0.2);'>
                © 2022 M.V.S <br>
                <!-- Mentions légales :
                <a href="https://www.flaticon.com/fr/icones-gratuites/avatar" title="avatar icônes">Avatar icônes créées par Prosymbols Premium - Flaticon</a> -->
            </div>

            <!-- Copyright -->
        </footer>
    </div>
    <?php
}
?>