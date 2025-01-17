

<!-- ici c'est la page ou quand l'user a créer son perso met pret pour lancer le combat -->

<?php

include_once '../utils/autoloader.php';
session_start();
// var_dump($_POST);





$monstre = new Monstre(); 


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
<article class="cards-wrapper">
  <!-- Carte du Héros -->
  <div class="hero-card">
    <div class="hero-header">
      <img class="hero-img" src="../public/assets/img/hero.png" alt="Hero">
      <h2 class="hero-name" id="heroName"><?php echo $_SESSION['hero']->getPrenom(); ?></h2>
    </div>
    <div class="hero-stats">
      <p id="heroHp"><strong>Point de vie :</strong> <?php echo $_SESSION['hero']->getPointDeVie(); ?></p>
      <p id="heroAttack"><strong>Attack :</strong> <?php echo $_SESSION['hero']->getAttack(); ?></p>
    </div>
  </div>

  <h1>VS</h1>

  <!-- Carte du Monstre -->
  <div class="hero-card">
    <div class="hero-header">
      <img class="hero-img" src="<?php echo $monstre->getImage() ?>" alt="Monster">
      <h2 class="hero-name" id="monsterName"><?php echo $monstre->getNom()?></h2>
    </div>
    <div class="hero-stats">
      <p id="monsterHp"><strong>Point de vie :</strong> <?php echo $monstre->getHp()?></p>
      <p id="monsterAttack"><strong>Attack :</strong> <?php echo $monstre->getAttack() ?></p>
    </div>
  </div>
</article>

<div class="action-buttons">
    <button id="attack" class="action-button">Attaquer</button>
    <button id="quit" class="action-button">Quitter le combat</button>
    <a href="../process/disconectProcess.php" class="action-button">Quitter la partie</a>
</div>


<div class="log" id="log">
    <p>Le combat commence !</p>
</div>

<script src="./assets/js/attaque.js"></script>
<!-- j'ai le js il faut juste que je l'associe -->


</body>
</html>