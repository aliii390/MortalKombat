


<?php

 

class Monstre{
    
    private $image;
    private $attack;
    private $nom;
    private $hp;
    private $endurance;


    public function __construct() {
        $numero = random_int(0, 4);
        $this->nom = $this->genererNomAleatoire($numero);
        $this->image = $this->genererImageAleatoire($numero);
        $this->hp = rand(100, 500);
        $this->attack = rand(20, 100);
        $this->endurance = rand(20, 100);
    }

    private function genererNomAleatoire($numero) {
        $noms = ['Mortadon', 'Wolvermine', 'MimiMaty', 'BigOussam', 'Fresstyle Monstre'];
        return $noms[$numero];
    }

    private function genererImageAleatoire($numero) {
        $images = [
            './assets/img/mortadon.jpg',
            './assets/img/images.jpg',
            './assets/img/mimimaty.jpg',
            './assets/img/oussam.jpg',
            './assets/img/fress.jpg'
        ];
        return $images[$numero];
    }

    public function getNom() {
        return $this->nom;
    }

    public function getImage() {
        return $this->image;
    }

    public function getHp() {
        return $this->hp;
    }

    public function getAttack() {
        return $this->attack;
    }

        public function getEndurance(){
            return $this->endurance;
        }
}

// créer le process pour le zombie pour juste l'enregistrer dans la session 


