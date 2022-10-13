<!-- <?php
        session_start();
        $id = mysqli_connect("127.0.0.1", "root", "", "bonu");
        if (isset($_POST["bouton"])) {
            $mail = $_POST["mail"];
            $mdp = $_POST["mdp"];
            $req = "select * from user where mail='$mail' and mdp='$mdp' ";
            $resultat = mysqli_query($id, $req);
            $ligne = mysqli_fetch_assoc($resultat);
            $idu = $ligne["idu"];
            $nom = $ligne["nom"];
            $prenom = $ligne["prenom"];
            $grade = $ligne["grade"];

            if (mysqli_num_rows($resultat) > 0) {
                $_SESSION["idu"] = $idu;
                $_SESSION["nom"] = $nom;
                $_SESSION["prenom"] = $prenom;
                $_SESSION["grade"] = $grade;

                if ($grade == 0) {
                    header("location:home.php");
                } else {
                    header("location:admin.php");
                }
            }
        } else {
            print("Mail ou mot de passe incorrect !");
        }

        ?>-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/Bonumanguli5.png" />
    <title>Connexion</title>
    <link rel="stylesheet" href="bonum.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>
    <div class="fondinsc">
        <div class="row g-3 position-absolute top-50 start-50 translate-middle rounded shadow text-center" style="background-color: #0051ff">
            <div class="h1">
                <h1>Formulaire de connexion</h1>
            </div>
            <hr>
            <div class="container">
                <form action="" method="post">
                    <input type="email" name="mail" style="width:250px" placeholder="Entrez votre mail:" required>
                    <input type="password" style="width:250px" name="mdp" placeholder="Entrez votre mot de passe: " required> <br><br>
                    <input type="reset" value="ANNULER">&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="submit" value="ENVOYER" name="bouton"> <br> <br>
                </form>
                <div class='text-start'>
                    Pas de compte?<a href="inscription.php" class="btn btn-primary p-2 m-2">S'INSCRIRE</a>
                </div>
            </div>
        </div>

        <div class="corpsacc">
            <div class="bg-image" style="background-image: url('images/back1.png');
            height: 100vh">
            </div>
        </div>
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
                        Le Musée des Vins et Spiritueux est une marque deposée par ECE Bachelor. <br>
                        Tous droits réservés.
                    </p>



                </section>
            </div>
            <!-- Grid container -->




            <!-- Copyright -->
            <div class='text-center text-light p-3' style='background-color: rgba(0, 0, 0, 0.2);'>
                © 2022 M.V.S <br>
                <!-- Mentions légales : -->
                <!-- <a href="https://www.flaticon.com/fr/icones-gratuites/avatar" title="avatar icônes">Avatar icônes créées par Prosymbols Premium - Flaticon</a> -->
            </div>
            <!-- Copyright -->
        </footer>
</body>

</html>