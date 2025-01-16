

<!-- ici c'est la page ou quand l'user a créer son perso met pret pour lancer le combat -->

<?php

include_once '../utils/autoloader.php';
session_start();
// var_dump($_POST);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carte du Héros</title>
    <link rel="stylesheet" href="./assets/css/hero.css">
</head>
<body>
<article class="card-container">
  <div class="hero-card">
    <div class="hero-header">
      <!-- <img class="hero-img" src="hero-image.jpg" alt="Hero"> -->
      <h2 class="hero-name"><?php echo $_SESSION['hero']->getPrenom(); ?></h2>
    </div>
    <div class="hero-stats">
      <p><strong>Point de vie : </strong><?php echo $_SESSION['hero']->getPointDeVie(); ?></p>
      <p><strong>Attack :</strong> <?php echo $_SESSION['hero']->getAttack() ?></p>
      <p><strong>Endurance :</strong><?php echo $_SESSION['hero']->getEndurance() ?></p>
    </div>
    <!-- <div class="hero-description">
      <p>Le héros est un combattant aguerri, maîtrisant des techniques redoutables. Son arme favorite est la "Lame du Dragon".</p>
    </div> -->
    <a href="">
    <button class="fight-button">Combattre</button>
    </a>
  </div>
</article>

    <a href="../process/disconectProcess.php">Quittez le combat</a>

</body>
</html>
