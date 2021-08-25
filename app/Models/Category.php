<?php

namespace Immo\Models;

use Immo\Utils\Database;
use PDO;

class Category extends CoreModel
{
    private $name;

    public static function findAllCategories()
    {
        $pdo = Database::getPDO();
        $sql = "SELECT * FROM `category`;";
        $pdoStatement = $pdo->query($sql);
        $categories = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        
        return $categories;
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