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
  if (!isset($_SESSION["idu"])) {
    return False;
  } else return True;
}

function foot()
{
?>
  <footer class='text-center text-white' style='background-color: rgba(0, 0, 0, 0.904);color:white; width: 100%;'>
    <div class='container pt-4'>
      <section class='text-center text-light'>
        <p>
          Bonumanguli est un site deposé par ECE Bachelor. <br>
          Tous droits réservés.
        </p>
      </section>
    </div>
    <div class='text-center text-light p-3' style='background-color: rgba(0, 0, 0);'>
      © 2022 BONUM<br>
    </div>
  </footer>
<?php
}

function headsimple()
{
?>
  <nav class="navbar head sticky-top" id="primal" style="margin-bottom: 1%;">
    <div class="container-fluid">
      <div class="container">
        <div class="row">

          <div class="col-3">
            <a href="home.php"><img src="image/Bonumanguli8.png" class="position-absolute top-0 start-0" style="width: 5em;"></a>
          </div>

          <div class="col-6 text-center">
            <a href="home.php" id="textthird">
              <h2>Bonumanguli</h2>
            </a>
          </div>
          <div class="col-3 text-end">

            <a href='modifuser.php' style='text-decoration:none' id='textthird'><img src='image/0.png' width='50'></button><br>Mon Compte</a>
          </div>

        </div>
      </div>
    </div>
  </nav>
<?php
}

function headermain()
{
?>
  <nav class="navbar head sticky-top" id="primal">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-3">
            <img src="image/Bonumanguli3.png" width="100" style="float:left"><br><br><br><br>
            <span id="textthird" style="float:left;" class="">Η αρχαιότητα σε όλη τη διαδρομή</span>
          </div>
          <div class="col-6 text-center">
            <a href="home.php" id="textthird">
              <h2>Bonumanguli</h2>
            </a>
            <form action="recherche.php" class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Rechercher">
              <button class="btn btn-outline-success" type="submit">Rechercher</button>
            </form>
          </div>
          <div class="col-3 text-center">
            <div class="container">
              <div class="row">
                <div class="col-6" id="textthird">
                  <br>
                  <a href="favoris.php" style="text-decoration:none" id='textthird'><img src='image/vide.png' width='37' class='mt-3'></button><br>Mes favoris</a>
                </div>
                <div class="col-6" id="textthird">
                  <a class="btn sdropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php
                    if (connecte() == false) {
                      echo "<a href='connexion.php' style='text-decoration:none' id='textthird' ><img src='image/0.png' width='50'class='mt-4'></button><br>Me Connecter</a> </div>";
                    } else {
                      echo "<a href='modifuser.php' style='text-decoration:none' id='textthird'><img src='image/0.png' width='50' class='mt-4'></button><br>Mon Compte</a> </div>";
                    }
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
<?php
}

function bighead($idu)
{
?>
  <nav class="navbar head sticky-top" id="primal">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-3">
            <img src="image/Bonumanguli3.png" width="100" style="float:left"><br><br><br><br>
            <span id="textthird" style="float:left;" class="">Η αρχαιότητα σε όλη τη διαδρομή</span>
          </div>
          <div class="col-6 text-center">
            <a href="home.php" id="textthird">
              <h2>Bonumanguli</h2>
            </a>
            <form action="recherche.php" class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Rechercher">
              <button class="btn btn-outline-success" type="submit">Rechercher</button>
            </form>
          </div>
          <div class="col-3 text-center">
            <div class="container">
              <div class="row">
                <div class="col-6" id="textthird">
                  <br>
                  <a href="favoris.php" style="text-decoration:none" id='textthird'><img src='image/vide.png' width='37' class='mt-3'></button><br>Mes favoris</a>
                </div>
                <div class="col-6" id="textthird">
                  <a class="btn sdropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php
                    if (connecte() == false) {
                      echo "<a href='connexion.php' style='text-decoration:none' id='textthird' ><img src='image/0.png' width='50'class='mt-4'></button><br>Me Connecter</a> </div>";
                    } else {
                      echo "<a href='modifuser.php' style='text-decoration:none' id='textthird'><img src='image/0.png' width='50' class='mt-4'></button><br>Mon Compte</a> </div>";
                    }
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
<?php
}

function chat()
{
  $id = mysqli_connect("127.0.0.1", "root", "", "bonu");
  if (isset($_POST["Bouton"])) {
    if (!isset($_POST["message"]) or empty($_POST["message"])) {
      $erreur2 = "Vous avez oublié de saisir votre Message!!!";
    } else {
      $idp = $_POST["idp"];
      $idu = $_POST["idu"];
      $mess = $_POST["message"];
      $req = "insert into message values (null,'$idp','$idu','$mess',now())";
      $resultat = mysqli_query($id, $req);
    }
  }
?>
  <section class="msger">
    <header class="msger-header">
      <div class="msger-header-title">
        <i class="fas fa-comment-alt"></i>Chat
      </div>
      <table>
        <?php
        $req2 = "select mess,idu, date from mess order by date";
        $resultat = mysqli_query($id, $req2);
        while ($ligne = mysqli_fetch_assoc($resultat)) {
          echo "<tr>
                <td>" . $ligne["date"] . "</td>
                <td>" . $ligne["idu"] . "</td>
                <td>" . $ligne["message"] . "</td>
                </tr>";
        }
        ?>
      </table>
      <div class="msger-header-options">
        <span><i class="fas fa-cog"></i></span>
      </div>
    </header>

    <main class="msger-chat">
      <div class="msg left-msg">
        <div class="msg-img" style="background-image: url(https://image.flaticon.com/icons/svg/32)"></div>

        <div class="msg-bubble">
          <div class="msg-info">
            <div class="msg-info-name">BOT</div>
            <div class="msg-info-time">12:45</div>
          </div>

          <div class="msg-text">
            Hi, welcome to SimpleChat! Go ahead and send me a message. 😄
          </div>
        </div>
      </div>

      <div class="msg right-msg">
        <div class="msg-img" style="background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)"></div>

        <div class="msg-bubble">
          <div class="msg-info">
            <div class="msg-info-name">Sajad</div>
            <div class="msg-info-time">12:46</div>
          </div>

          <div class="msg-text">
            You can change your name in JS section!
          </div>
        </div>
      </div>
    </main>

    <form class="msger-inputarea">
      <input type="text" class="msger-input" name="mess" placeholder="Entre ton message...">
      <button type="submit" class="msger-send-btn" name="Bouton">Envoyer</button>
    </form>
    <?php
    if (isset($erreur1)) {
      echo "<div class='erreur'>$erreur1</div>";
    }
    if (isset($erreur2)) {
      echo "<div class='erreur'>$erreur2</div>";
    }
    ?>
  </section>
<?php
}
?>