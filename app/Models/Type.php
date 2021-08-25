<?php

namespace Immo\Models;

use Immo\Utils\Database;
use PDO;

class Type extends CoreModel
{
    private $name;

    public static function findAllTypes()
    {
        $pdo = Database::getPDO();
        $sql = "SELECT * FROM `type`;";
        $pdoStatement = $pdo->query($sql);
        $types = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        
        return $types;
    }

     /**
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     */ 
    public function setName(string $name)
    {
        $this->name = $name;
    }
}