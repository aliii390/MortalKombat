<?php

final class Hero
{
    private int $id;
    private string $prenom;
    private int $pointDeVie;
    private int $attack;
    private int $endurance;
    private string $genre;
   

    // rajoutez point de vie apres


    // ici pour l'instant les valeur son par défaut pour tester mais une fois que tout marche faut que j'enlève les valeurs par défaut et les mettre dans le construct

    public function __construct(int $id, string $prenom , string $genre )
    {
        $this->id = $id;
        $this->prenom = $prenom;
        $this->pointDeVie = 120;
        $this->attack = 50;
        $this->endurance = 20;
        $this->genre = $genre ;
   
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * Get the value of pointDeVie
     */ 
    public function getPointDeVie()
    {
        return $this->pointDeVie;
    }

    /**
     * Set the value of pointDeVie
     *
     * @return  self
     */ 
    public function setPointDeVie($pointDeVie)
    {
        $this->pointDeVie = $pointDeVie;

        return $this;
    }



    public function getAttack(){
       return $this->attack;
    }

    public function setAttack($attack){
        $this->attack = $attack;
        return $this;
    }

    public function getEndurance(){
       return $this->endurance;
    }

    public function setEndurance($endurance){
        $this->endurance = $endurance;
        return $this;

    }


    public function getGenre(){
        return $this->genre;
    }

    public function setGenre($genre){
         $this->genre = $genre;
         return $this;
    }
   
}

