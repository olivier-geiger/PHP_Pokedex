<?php

namespace Pokedex\Models;

use Pokedex\utils\Database;

use PDO;

class Type {
    private $id;
    private $name;
    private $color;
    public function findAll() 
    {
        $sql = '
            SELECT * FROM `type`
        '; 
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
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }
}