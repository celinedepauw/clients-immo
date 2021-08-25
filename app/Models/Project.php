<?php

namespace Immo\Models;

use Immo\Utils\Database;
use PDO;

class Project extends CoreModel {
    private $client_firstname;
    private $client_lastname;
    private $client_email;
    private $client_phone;
    private $client_address;
    private $client_town;
    private $client_zipcode;
    private $project_category;
    private $project_type;
    private $project_surface;
    private $project_land_surface;
    private $project_rooms;
    private $project_location;
    private $project_price;
    private $project_financing;
    private $comments;
    private $appointment_date;
    private $updated_at;
    private $created_at;

    private $typeName;
    private $financingName;

    /**
     * findAllSales() method to get all the projects of sales
     * @return Project[]
     */
    public static function findAllSales() {
        $pdo = Database::getPDO();
        $sql = "SELECT `project`.*, `type`.`name` AS `typeName` FROM `project` INNER JOIN `type` ON `project`.`project_type` = `type`.`id` WHERE `project`. `project_category` = 2 ORDER BY `project`.`client_lastname`;";
        $pdoStatement = $pdo->query($sql);
        $sales = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $sales;
    }

     /**
     * findAllPurchases() method to get all the projects of purchases
     * @return Project[]
     */
    public static function findAllPurchases() {
        $pdo = Database::getPDO();
        $sql = "SELECT `project`.*, `type`.`name` AS `typeName` FROM `project` INNER JOIN `type` ON `project`.`project_type` = `type`.`id` WHERE `project`. `project_category` = 1 ORDER BY `project`.`client_lastname`;";
        $pdoStatement = $pdo->query($sql);
        $purchases = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $purchases;
    }

    public static function findPurchase($idPurchase) {
        $pdo = Database::getPDO();
        $sql = "SELECT `project`.*, `type`.`name` AS `typeName`, `financing`.`name` AS `financingName` FROM `project` INNER JOIN `type` ON `project`.`project_type` = `type`.`id` LEFT JOIN `financing` ON `project`.`project_financing` = `financing`.`id` WHERE `project`. `id`={$idPurchase};";
        $statement = $pdo->query($sql);
        $project = $statement->fetchObject(static::class);
        
        return $project;
    }

    public static function findSale($idSale) {
        $pdo = Database::getPDO();
        $sql = "SELECT `project`.*, `type`.`name` AS `typeName`, `financing`.`name` AS `financingName` FROM `project` INNER JOIN `type` ON `project`.`project_type` = `type`.`id` LEFT JOIN `financing` ON `project`.`project_financing` = `financing`.`id` WHERE `project`. `id`={$idSale};";
        $statement = $pdo->query($sql);
        $project = $statement->fetchObject(static::class);
        
        return $project;
    }

    public static function findProject($idProject) {
        $pdo = Database::getPDO();
        $sql = "SELECT `project`.*, `type`.`name` AS `typeName`, `financing`.`name` AS `financingName` FROM `project` INNER JOIN `type` ON `project`.`project_type` = `type`.`id` LEFT JOIN `financing` ON `project`.`project_financing` = `financing`.`id` WHERE `project`. `id`={$idProject};";
        $statement = $pdo->query($sql);
        $project = $statement->fetchObject(static::class);
        
        return $project;
    }

    public function insert()
    {
        $pdo = Database::getPDO();

        $sql = "
        INSERT INTO `project` (client_lastname, client_firstname, client_email, client_phone, client_address, client_town, client_zipcode, project_category, project_type, project_surface, project_land_surface, project_rooms, project_location, project_price, project_financing, comments, appointment_date)
        VALUES (:client_lastname, :client_firstname, :client_email, :client_phone, :client_address, :client_town, :client_zipcode, :project_category, :project_type, :project_surface, :project_land_surface, :project_rooms, :project_location, :project_price, :project_financing, :comments, :appointment_date )
        ";

        $query = $pdo->prepare($sql);

        $query->bindValue(':client_lastname', $this->client_lastname, PDO::PARAM_STR);
        $query->bindValue(':client_firstname', $this->client_firstname, PDO::PARAM_STR);
        $query->bindValue(':client_email', $this->client_email, PDO::PARAM_STR);
        $query->bindValue(':client_phone', $this->client_phone, PDO::PARAM_STR);
        $query->bindValue(':client_address', $this->client_address, PDO::PARAM_STR);
        $query->bindValue(':client_town', $this->client_town, PDO::PARAM_STR);
        $query->bindValue(':client_zipcode', $this->client_zipcode, PDO::PARAM_STR);
        $query->bindValue(':project_category', $this->project_category, PDO::PARAM_INT);
        $query->bindValue(':project_type', $this->project_type, PDO::PARAM_INT);
        $query->bindValue(':project_surface', !empty($project_surface) ? $this->project_surface : NULL, PDO::PARAM_INT); 
        $query->bindValue(':project_land_surface', !empty($project_land_surface) ? $this->project_land_surface : NULL, PDO::PARAM_INT);
        $query->bindValue(':project_rooms', !empty($project_rooms) ? $this->project_rooms : NULL, PDO::PARAM_INT);
        $query->bindValue(':project_location', !empty($project_location) ? $this->project_location : NULL, PDO::PARAM_STR);
        $query->bindValue(':project_price', !empty($project_price) ? $this->project_price : NULL, PDO::PARAM_STR);
        $query->bindValue(':project_financing', !empty($project_financing) ? $this->project_financing : NULL, PDO::PARAM_STR);
        $query->bindValue(':comments', !empty($comments) ? $this->comments : NULL, PDO::PARAM_STR);
        $query->bindValue(':appointment_date', !empty($appointment_date) ? $this-> appointment_date : NULL, PDO::PARAM_STR);

        $query->execute();

        return true;
    }

    /**
     * Get the value of typeName
     *
     * @return  string
     */ 
    public function getTypeName()
    {
        return $this->typeName;
    }

    /**
     * Set the value of typeName
     *
     * @param  string  $typeName
     */ 
    public function setTypeName(string $typeName)
    {
        $this->typeName = $typeName;
    }

     /**
     * Get the value of financingName
     *
     * @return  string
     */ 
    public function getFinancingName()
    {
        return $this->financingName;
    }

    /**
     * Set the value of financingName
     *
     * @param  string  $financingName
     */ 
    public function setFinancingName(string $financingName)
    {
        $this->financingName = $financingName;
    }

    /**
     * Get the value of client_firstname
     */ 
    public function getClientFirstname()
    {
        return $this->client_firstname;
    }

    /**
     * Set the value of client_firstname
     *
     * @return  self
     */ 
    public function setClientFirstname($client_firstname)
    {
        $this->client_firstname = $client_firstname;

        return $this;
    }

    /**
     * Get the value of client_lastname
     */ 
    public function getClientLastname()
    {
        return $this->client_lastname;
    }

    /**
     * Set the value of client_lastname
     *
     * @return  self
     */ 
    public function setClientLastname($client_lastname)
    {
        $this->client_lastname = $client_lastname;

        return $this;
    }

    /**
     * Get the value of client_email
     */ 
    public function getClientEmail()
    {
        return $this->client_email;
    }

    /**
     * Set the value of client_email
     *
     * @return  self
     */ 
    public function setClientEmail($client_email)
    {
        $this->client_email = $client_email;

        return $this;
    }

    /**
     * Get the value of client_phone
     */ 
    public function getClientPhone()
    {
        return $this->client_phone;
    }

    /**
     * Set the value of client_phone
     *
     * @return  self
     */ 
    public function setClientPhone($client_phone)
    {
        $this->client_phone = $client_phone;

        return $this;
    }

    /**
     * Get the value of client_address
     */ 
    public function getClientAddress()
    {
        return $this->client_address;
    }

    /**
     * Set the value of client_address
     *
     * @return  self
     */ 
    public function setClientAddress($client_address)
    {
        $this->client_address = $client_address;

        return $this;
    }

    /**
     * Get the value of client_town
     */ 
    public function getClientTown()
    {
        return $this->client_town;
    }

    /**
     * Set the value of client_town
     *
     * @return  self
     */ 
    public function setClientTown($client_town)
    {
        $this->client_town = $client_town;

        return $this;
    }

    /**
     * Get the value of client_zipcode
     */ 
    public function getClientZipcode()
    {
        return $this->client_zipcode;
    }

    /**
     * Set the value of client_zipcode
     *
     * @return  self
     */ 
    public function setClientZipcode($client_zipcode)
    {
        $this->client_zipcode = $client_zipcode;

        return $this;
    }

    /**
     * Get the value of project_category
     */ 
    public function getProjectCategory()
    {
        return $this->project_category;
    }

    /**
     * Set the value of project_category
     *
     * @return  self
     */ 
    public function setProjectCategory($project_category)
    {
        $this->project_category = $project_category;

        return $this;
    }

    /**
     * Get the value of project_type
     */ 
    public function getProjectType()
    {
        return $this->project_type;
    }

    /**
     * Set the value of project_type
     *
     * @return  self
     */ 
    public function setProjectType($project_type)
    {
        $this->project_type = $project_type;

        return $this;
    }

    /**
     * Get the value of project_surface
     */ 
    public function getProjectSurface()
    {
        return $this->project_surface;
    }

    /**
     * Set the value of project_surface
     *
     * @return  self
     */ 
    public function setProjectSurface($project_surface)
    {
        $this->project_surface = $project_surface;

        return $this;
    }

    /**
     * Get the value of project_land_surface
     */ 
    public function getProjectLandSurface()
    {
        return $this->project_land_surface;
    }

    /**
     * Set the value of project_land_surface
     *
     * @return  self
     */ 
    public function setProjectLandSurface($project_land_surface)
    {
        $this->project_land_surface = $project_land_surface;

        return $this;
    }

    /**
     * Get the value of project_rooms
     */ 
    public function getProjectRooms()
    {
        return $this->project_rooms;
    }

    /**
     * Set the value of project_rooms
     *
     * @return  self
     */ 
    public function setProjectRooms($project_rooms)
    {
        $this->project_rooms = $project_rooms;

        return $this;
    }

    /**
     * Get the value of project_location
     */ 
    public function getProjectLocation()
    {
        return $this->project_location;
    }

    /**
     * Set the value of project_location
     *
     * @return  self
     */ 
    public function setProjectLocation($project_location)
    {
        $this->project_location = $project_location;

        return $this;
    }

    /**
     * Get the value of project_price
     */ 
    public function getProjectPrice()
    {
        return $this->project_price;
    }

    /**
     * Set the value of project_price
     *
     * @return  self
     */ 
    public function setProjectPrice($project_price)
    {
        $this->project_price = $project_price;

        return $this;
    }

    /**
     * Get the value of project_financing
     */ 
    public function getProjectFinancing()
    {
        return $this->project_financing;
    }

    /**
     * Set the value of project_financing
     *
     * @return  self
     */ 
    public function setProjectFinancing($project_financing)
    {
        $this->project_financing = $project_financing;

        return $this;
    }

    /**
     * Get the value of comments
     */ 
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set the value of comments
     *
     * @return  self
     */ 
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get the value of appointment_date
     */ 
    public function getAppointmentDate()
    {
        return $this->appointment_date;
    }

    /**
     * Set the value of appointment_date
     *
     * @return  self
     */ 
    public function setAppointmentDate($appointment_date)
    {
        $this->appointment_date = $appointment_date;

        return $this;
    }

    /**
     * Get the value of updated_at
     */ 
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */ 
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * Get the value of created_at
     */ 
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }
}