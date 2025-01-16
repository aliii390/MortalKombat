

<?php

class MonstreMapper implements MapperContract{
    public static function mapToObject(array $monstreData): Monstre
    {
        return new Monstre(
            $monstreData['id'],
            $monstreData['prenom'],
            $monstreData['point_vie'],
            $monstreData['attack'],
            $monstreData['endurance'],
        );
    }
}