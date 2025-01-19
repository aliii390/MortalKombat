<?php


session_start();

if (isset($_SESSION['hero']) && !empty($_SESSION['hero'])) {
    header('Location: ./prepareFight.php');
    exit;
}

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un personnage - Mortal Kombat</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>

<header class="header">
    <h1>Bienvenue Sur Mortal Kombat</h1>
    <h3 class="h3-header">Là où seuls les plus forts survivent !</h3>
</header>
    
<main>
    <img class="hero-image" src="./assets/img/hero.png" alt="">
    <section class="form-section">
        <h2>Créez votre personnage</h2>
        <form class="character-form" action="../process/createPerso-process.php" method="POST">
            <label for="character-name">Nom du personnage</label>
            <input 
                type="text" 
                id="character-name" 
                name="prenom" 
                placeholder="Créer ton perso" 
                required>
                
                <label for="genre">homme ou femme</label>
               <input type="text"
               type="text"
               id="genre"
               name="genre"
               placeholder="Entre ton genre"
               
               
               >
            
            <button type="submit">Créer</button>
        </form>
    </section>

    <!-- Ajout de la classe 'hero-image' -->
    <img src="./assets/img/monstre.png" alt="Personnage" class="hero-image">
</main>


</body>
</html>
