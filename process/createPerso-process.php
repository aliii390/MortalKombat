<?php

require_once '../utils/autoloader.php';

// var_dump($_POST);


session_start();

$heroRepository = new HeroRepository();

$hero = $heroRepository->findByPrenom($_POST['prenom']);


if(!$hero){
    $hero = new Hero(0, $_POST['prenom'] , $_POST['genre']);

    $heroRepository->createHero($hero);
    $hero = $heroRepository->findByPrenom($_POST['prenom']);
}

$_SESSION['hero'] = $hero;

header("Location: ../public/prepareFight.php");