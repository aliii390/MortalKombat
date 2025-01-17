

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
    <link rel="stylesheet" href="../public/assets/css/hero.css">
</head>
<body>
<article class="cards-wrapper">
  <!-- Carte du Héros -->
  <div class="hero-card">
    <div class="hero-header">
      <img class="hero-img" src="../public/assets/img/hero.png" alt="Hero">
      <h2 class="hero-name"><?php echo $_SESSION['hero']->getPrenom(); ?></h2>
    </div>
    <div class="hero-stats">
      <p><strong>Point de vie :</strong> <?php echo $_SESSION['hero']->getPointDeVie(); ?></p>
      <p><strong>Attack :</strong> <?php echo $_SESSION['hero']->getAttack(); ?></p>
      <p><strong>Endurance :</strong> <?php echo $_SESSION['hero']->getEndurance(); ?></p>
    </div>
    <button class="fight-button">Combattre</button>
  </div>
<h1>VS</h1>

 <!-- Carte de l'Adversaire -->
 <div class="hero-card">
        <div class="hero-header">
            <img class="hero-img" src="<?php echo $monstre->getImage() ?>" alt="Zombie">   <!-- mettre $monstre->getImg qnd j'ai les img  -->
            <h2 class="hero-name"><?php echo $monstre->getNom()?></h2>
        </div>
        <div class="hero-stats">
            <p><strong>Point de vie :</strong><?php echo $monstre->getHp()?></p>
            <p><strong>Attack :</strong> <?php echo $monstre->getAttack() ?></p>
            <p><strong>Endurance :</strong> <?php echo $monstre->getEndurance() ?></p>
        </div>
    </div>
</article>

<div class="place-a">
<a href="../process/disconectProcess.php">Quittez le combat</a>

</div>




</body>
</html>
