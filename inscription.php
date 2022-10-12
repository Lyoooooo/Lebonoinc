<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bonum.css">
    <link rel="icon" href="image/Bonumanguli5.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Inscription</title>
</head>

<body>
    <!-- position-absolute top-50 start-50 translate-middle -->
    <div class="fondinsc">
        <div class="row g-3  rounded shadow text-center " style="background-color:ffffff;">
            <div class="h1">
                <H1>Inscription</H1>
            </div>
            <hr><br>
            <div class=text-end>
                <form action="" method="post">
                    <a href="connexion.php" class="button">SE CONNECTER</a> <br>
            </div>

            <div class="col-md-4">
                <label for="validationDefault01" class="form-label">Nom</label> <span class="etoile">*</span>
                <input type="text" name="nom" class="form-control" id="" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">Prénom</label><span class="etoile">*</span>
                <input type="text" name="prenom" class="form-control" id="" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">Pseudo</label><span class="etoile">*</span>
                <input type="text" name="pseudo" class="form-control" id="" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">Genre</label><span class="etoile">*</span><br>
                <input class="form-check-input" type="radio" name="genre" id="masculin">
                <label class="form-check-label" for="flexRadioDefault1">
                    Masculin
                </label><br>
                <input class="form-check-input" type="radio" name="genre" id="feminin">
                <label class="form-check-label" for="flexRadioDefault1">
                    Féminin
                </label><br>
                <input class="form-check-input" type="radio" name="genre" id="autre" checked>
                <label class="form-check-label" for="flexRadioDefault1">
                    Licorne
                </label>
            </div>
            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">Date de naissance</label><span class="etoile">*</span>
                <input type="date" name="anniv" class="form-control" id="" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefaultUsername" class="form-label">Adresse mail</label><span class="etoile">*</span>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                    <input type="text" name="mail" class="form-control" id="" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationDefault03" class="form-label">Adresse Postale</label><span class="etoile">*</span>
                <input type="text" name="adresse" class="form-control" id="" required>
            </div>
            <div class="col-md-6">
                <label for="validationDefault03" class="form-label">Adresse Postale Ville</label><span class="etoile">*</span>
                <input type="text" name="ville" class="form-control" id="" required>
            </div>
            <div class="col-md-3">
                <label for="validationDefault04" class="form-label">Code postal</label><span class="etoile">*</span>
                <input type="text" name="cp" class="form-control" id="" required>
                </select>
            </div>
            <div class="col-md-3">
                <label for="validationDefault04" class="form-label">N° Telephone</label><span class="etoile">*</span>
                <input type="tel" name="tel" class="form-control" id="" required>
                </select>
            </div>

            <div class="col-md-4">
                <label for="validationDefault05" class="form-label">Mot de passe</label><span class="etoile">*</span>
                <input type="password" name="mdp" class="form-control" id="" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefault06" class="form-label">Confirmer votre mot de passe</label><span class="etoile">*</span>
                <input type="password" name="mdpverif" class="form-control" id="" required>
            </div>

            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">reset</button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">valider</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 text-start ">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">
                        J'ai lu et j'accepte les conditions générales d'utilisation
                    </label>
                </div>
            </div>

            <div class="col-12 p-2 m-2">
                <button class="btn btn-primary" type="submit" value='Log In' name="bouton">Log In</button>
            </div>
        </div>
    </div>
    </form>
    </div>
    <?php
    if (isset($_POST["bouton"])) {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $pseudo = $_POST["pseudo"];
        $anniv = $_POST["anniv"];
        $mail = $_POST["mail"];
        $adresse = $_POST["adresse"];
        $ville = $_POST["ville"];
        $cp = $_POST["cp"];
        $tel = $_POST["tel"];
        $genre = $_POST["genre"];
        $mdp = $_POST["mdp"];
        $mdp2 = $_POST["mdpverif"];


        print($nom);

        if ($mdp == $mdp2) {
            $id = mysqli_connect("127.0.0.1", "root", "", "bonu");
            $res = mysqli_query($id, "select mail from user where mail = '$mail'");
            $ligne = mysqli_fetch_assoc($res);
            if ($mail != $ligne["mail"]) {
                $res = mysqli_query($id, "insert into user value (null,'$prenom','$nom','$mail','$mdp','$pseudo','$genre','$adresse','$cp','$ville','$tel','$anniv',0,0)");
                echo "Inscription réussie ! <br>Chargement de la page d'inscription...";
    ?>
                <meta http-equiv="refresh" content="1;url=connexion.php" /> <?php
                                                                            exit();
                                                                        } else echo "Cette adresse mail est déjà utilisée";
                                                                    } else echo "Les deux mots de passe sont différents";
                                                                }
                                                                            ?>
    <div class="corpsacc">
        <div class="bg-image" style="background-image: url('images/back1.png');
            height: 50vh">
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
                <!-- Mentions légales :
                <a href="https://www.flaticon.com/fr/icones-gratuites/avatar" title="avatar icônes">Avatar icônes créées par Prosymbols Premium - Flaticon</a> -->
            </div>
            <!-- Copyright -->
        </footer>
</body>

</html>