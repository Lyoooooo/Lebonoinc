<?php
  include "fonction.php";
  session_start();
  $pdo = connexion()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/Bonumanguli5.png" />
    <title>Ajouter un article</title>
    <link rel="stylesheet" href="bonum.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body id="second">
<div class="head sticky-top">
    <nav class="navbar navbar-toggler navbar-light" id="primal">
      <div class="container-fluid">

        <div class="container ">
          <div class="row">

            <div class="col">
              <img src="image/Bonumanguli8.png" width="70" class="position-absolute top-0 start-0">
            </div>

            <div class="col text-center">
              <a class="navbar-brand" href="home.php" id="textthird"><h2>Bonumanguli</h2></a>
            </div>

            

            <div class="col text-end">
              <div id="textthird">
                  <img src="image/0.png" width="70" ><br>
              </div>
            </div>
          
          </div>
        </div>
      </div>
    </nav>
  </div>

  <div id="divmid">
  <div id="divannonce">
    <span style="text-align: center;"><h1>Ajouter un article</h1></span><br><br>
    <div style="width: 90%; padding: 1em; position: relative; left: 5%;" class="text-center">
        <form action="" method="post">

            <div class="form-floating mb-3">
                
                <input type="text" class="form-control" name="nomp" id="floatingInput" placeholder="Nom de l'article" require>
                <label for="floatingInput" class="form-label">Nom de l'article<span class="etoile">*</span></label>
            </div><br>
            <div class="form-floating mb-3">
                <textarea class="form-control" name="descri" maxlength="300" id="floatingTextarea1" placeholder="Description" rows="3" style="height: 200px" require></textarea>
                <label for="floatingTextarea1" class="form-label">Description<span class="etoile">*</span></label>
            </div>
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col">
                        <label for="select" class="form-label">Etat<span class="etoile">*</span></label>
                        <select class="form-select" name="etat" aria-label="Default select example" id="select" placeholder="Etat" require>
                        
                            <option value="Neuf">Neuf</option>
                            <option value="Très bon état">Très bon état</option>
                            <option value="Bon état">Bon état</option>
                            <option value="Etat satisfaisant">Etat satisfaisant</option>
                            <option value="Mauvais état">Mauvais état</option>
                        </select>
                        </div>
                        <div class="col">
                          <label for="prix" class="form-label">Prix<span class="etoile">*</span></label>
                          <input type="number" name="prix" class="form-control" id="prix" require>
                        </div>
                    </div>
                </div>
            </div> <br><br>
            <div class="mb-3">
                <label for="formFile" class="form-label">Photo 1<span class="etoile">*</span></label>
                <input class="form-control" type="file" id="formFile" require>
            </div><br>
            <div class="mb-3">
                <label for="formFile" class="form-label">Photo 2</label>
                <input class="form-control" type="file" id="formFile">
            </div><br>
            <div class="mb-3">
                <label for="formFile" class="form-label">Photo 3</label>
                <input class="form-control" type="file" id="formFile">
            </div><br>
            <button type="submit" class="btn btn-primary" name="bouton">Poster l'annonce</button>
        </form>
    </div>
  </div>

  <?php
    if (isset($_POST["bouton"])) {
      $idu= $_SESSION["idu"];
      extract($_POST);
      echo"$nomp $descri $prix $etat";
      $sql = "INSERT INTO produit VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
      $pdo->prepare($sql)->execute([null, $idu, $nomp, $descri, $prix, "", "", "", "", "", $etat, 0]);
      echo "Inscription réussie ! <br>Chargement de la page d'inscription...";
      ?><meta http-equiv="refresh" content="20;url=home.php"/><?php
      }
  ?><br><br><br>
<?php
foot()
?>
</body>
</html>
