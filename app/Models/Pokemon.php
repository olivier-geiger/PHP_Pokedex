<?php

namespace Pokedex\Models;

use Pokedex\utils\Database;

use PDO;

class Pokemon {
    private $id;
    private $nom;
    private $pv;
    private $attaque;
    private $defense;
    private $attaque_spe;
    private $defense_spe;
    private $vitesse;
    private $numero;

    public function findAll() 
    {
        $sql = '
            SELECT * FROM `pokemon`
        '; 
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $results;

    }

    public function find($numero)
    {
        $sql = '
            SELECT `pokemon`.*,  `pokemon_type`.`type_id`
            FROM `pokemon`
            INNER JOIN `pokemon_type`
            ON `pokemon_type`.`pokemon_numero` = `pokemon`.`numero`
            WHERE  `pokemon`.`numero` = ' . $numero
        ;
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $results;
    }

    public function findAllByType($typeId) 
    {
        $sql = '
            SELECT `pokemon`.*, `type`.`name`
            FROM `pokemon`
            INNER JOIN `pokemon_type` 
            ON `pokemon_type`.`pokemon_numero` = `pokemon`.`numero`
            INNER JOIN `type`
            ON  `pokemon_type`.`type_id` = `type`.`id`
            WHERE `type`.`id` = ' . $typeId    
        ;
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $results;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Get the value of pv
     */ 
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * Get the value of attaque
     */ 
    public function getAttaque()
    {
        return $this->attaque;
    }

    /**
     * Get the value of defense
     */ 
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Get the value of attaque_spe
     */ 
    public function getAttaqueSpe()
    {
        return $this->attaque_spe;
    }

    /**
     * Get the value of defense_spe
     */ 
    public function getDefenseSpe()
    {
        return $this->defense_spe;
    }

    /**
     * Get the value of vitesse
     */ 
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }
}