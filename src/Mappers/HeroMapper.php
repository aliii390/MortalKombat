
<?php

class HeroMapper implements MapperContract{
    public static function mapToObject(array $heroData): Hero
    {
        return new Hero(
            $heroData['id'],
            $heroData['prenom'],
            $heroData['point_vie'],
            $heroData['attack'],
            $heroData['endurance'],
            $heroData['genre']
           
        );
    }
}