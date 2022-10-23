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

function foot(){
?>
  <footer class='text-center text-white sticky-bottom' style='background-color: rgba(0, 0, 0, 0.904);color:white;'>
    <div class='container pt-4'>
      <section class='text-center text-light'>
        <p>
          Bonumanguli est un site deposé par ECE Bachelor. <br>
          Tous droits réservés.
        </p>
      </section>
    </div>
    <div class='text-center text-light p-3' style='background-color: rgba(0, 0, 0, 0.2);'>
      © 2022 M.V.S <br>
    </div>
  </footer>
<?php
}

function headsimple()
{
?>
  <nav class="navbar head sticky-top" id="primal" style="margin-bottom: 2%;">
    <div class="container-fluid">
      <div class="container">
        <div class="row">

          <div class="col">
            <a href="home.php"><img src="image/Bonumanguli8.png" class="position-absolute top-0 start-0" style="width: 5em;"></a>
          </div>

          <div class="col text-center">
            <a class="navbar-brand" href="home.php" id="textthird">
              <h2>Bonumanguli</h2>
            </a>
          </div>
          <div class="col text-end">
            
          <a href='modifuser.php' style='text-decoration:none' id='textthird'><img src='image/0.png' width='50'></button><br>Mon Compte</a>
          </div>

        </div>
      </div>
    </div>
  </nav>
<?php
}
function chat()
{
?>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->


  <body>
    <div class="col-sm-3 col-sm-offset-4 frame">
      <ul></ul>
      <div>
        <div class="msj-rta macro">
          <div class="text text-r" style="background:whitesmoke !important">
            <input class="mytext" placeholder="Type a message" />
          </div>

        </div>
        <div style="padding:10px;">
          <span class="glyphicon glyphicon-share-alt"></span>
        </div>
      </div>
    </div>
  </body>


<?php
}
?>