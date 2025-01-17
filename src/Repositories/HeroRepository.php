

<?php


class HeroRepository extends AbstractRepository
{
    final public function __construct()
    {
        parent::__construct();
    }

    public function findByPrenom(string $prenom): ?Hero
    {
        $stmt = $this->pdo->prepare("SELECT * FROM hero WHERE prenom = :prenom");
        $stmt->bindParam(":prenom", $prenom, PDO::PARAM_STR);
        $stmt->execute();


        $heroData = $stmt->fetch();

        if (!$heroData) {
            return null;
        }

        return HeroMapper::mapToObject($heroData);
    }



    public function createHero(Hero $hero): void
    {
        $stmt = $this->pdo->prepare("INSERT INTO hero (prenom, point_vie , attack , endurance ) VALUES (:prenom, :point_vie, :attack, :endurance)");
        $stmt->execute([
            'prenom' => $hero->getPrenom(),
            ':point_vie' => $hero->getPointDeVie(),
            'attack'=> $hero->getAttack(),
            'endurance'=> $hero->getEndurance(),
        ]);
    }
}
