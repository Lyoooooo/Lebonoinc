<?php
include "fonction.php";
session_start();
$pdo = connexion();
$idp = $_GET["idp"];
$stmt = $pdo->prepare("SELECT * FROM produit WHERE idp=?");
$stmt->execute([$idp]);
$ligne = $stmt->fetch();
$idrec = $ligne["idu"];
$idu = $_SESSION["idu"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chat</title>
    <link rel="stylesheet" href="bonum.css">
    <link rel="icon" href="image/Bonumanguli5.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="bonum.js"></script>

</head>

<body>
    <div class="body">
        <?php
        if (isset($_POST["Bouton"])) {
            if (!isset($_POST["message"]) or empty($_POST["message"])) {
                $erreur2 = "Vous avez oublié de saisir votre Message!!!";
            } else {
                $mess = $_POST["message"];
                $stmt = $pdo->prepare("INSERT INTO messages VALUES (?,?,?,?,?)");
                $stmt->execute([NULL,$idu,$idrec,$mess,date("Y-m-d H:i:s")]);
                header("refresh:0;url=home.php?idp=$idp");
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
                    $stmt = $pdo->prepare("SELECT * FROM message WHERE (idsend = ? AND idrec = ?) OR (idsend = ? AND idrec = ?) ORDER BY ?");
                    $stmt->execute([$idu,$idrec,$idrec,$idu,"date DESC"]);
                    while ($ligne2 = $stmt->fetch()) {
                        echo "<tr>
                <td>" . $ligne2["date"] . "</td>
                <td>" . $ligne2["idu"] . "</td>
                <td>" . $ligne2["message"] . "</td>
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

            <form method="post" class="msger-inputarea" action="chat.php?idp=<?php echo"$idp"?>">
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
    </div>
</body>

</html>