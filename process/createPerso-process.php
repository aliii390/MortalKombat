<?php

require_once '../utils/autoloader.php';

// var_dump($_POST);


session_start();

$heroRepository = new HeroRepository();

$hero = $heroRepository->findByPrenom($_POST['prenom']);


if(!$hero){
    $hero = new Hero(0, $_POST['prenom']);

    $heroRepository->createHero($hero);
    $user = $heroRepository->findByPrenom($_POST['prenom']);
}

$_SESSION['user'] = $user;

header("Location: ../public/prepareFight.php");