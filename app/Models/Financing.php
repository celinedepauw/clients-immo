<?php

namespace Immo\Models;

use Immo\Utils\Database;
use PDO;

class Financing extends CoreModel
{
    private $name;

    public static function findAllFinancings()
    {
        $pdo = Database::getPDO();
        $sql = "SELECT * FROM `financing`;";
        $pdoStatement = $pdo->query($sql);
        $financings = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        
        return $financings;
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