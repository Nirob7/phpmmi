<!DOCTYPE html>
<?php
session_start();
include_once("code.php");

$user = new users;

?>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
</head>
<body>

    <div class="header">
              <div class="divcaca1"></div>
              <div class="divh2">
                  <a href=""><h2>Accueil</h2></a>
                  <a href=""><h2>Portefolio</h2></a>
                  <a href=""><h2>Contact</h2></a>
              </div>
              <div class="divcaca2"></div>
              <div class="divh3">
                  <a href="login.php" class="divh6_boutonconnect">Se Connecter</a>
                  <img src="image/utilisateur.svg" alt="icone_utilisateur" class="divh7_utilisateur">
              </div>
        </div>

        <?php if(isset($_SESSION["account"]["username"]))
        {
          ?>
          <div class="bjr">
            <?php
          echo("Bonjour ");
            echo($_SESSION["account"]["username"]);
            ?>
          </div>
          <?php
        }

        else
        {
            echo "NOT CONNECTED";
        }
            ?>

    <br>
    <?php
    global $db;

    $request = "SELECT * FROM works";
    $resultat = $db->query($request);
    while ($user = $resultat->fetch())
        {
          ?>
          <div class="titre"> <?php
            echo($user["title"]);
            ?>
          </div>

          <?php  echo("|");
          ?>
          <div class="bio"> <?php
            echo($user["description"]);
            ?>
            </div>

            <button class="butmodif"><a class="lienbutmodif" href="update.php?edit=<?= $user['id']?>"> Modifier le Projet </a></button>
          </br>
      <?php  }

    ?>
  </br>
    <button class="butajou"><a class="lienbutajou" href="create.php"> Ajouter un Projet </a></button>
    <div class="footerr">

  </div>
</body>
</html>
