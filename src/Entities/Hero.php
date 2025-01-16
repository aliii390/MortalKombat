<?php

final class Hero
{
    private int $id;
    private string $prenom;
    private int $pointDeVie;

    // rajoutez point de vie apres

    public function __construct(int $id, string $prenom)
    {
        $this->id = $id;
        $this->prenom = $prenom;
        $this->pointDeVie = 120;
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
}
