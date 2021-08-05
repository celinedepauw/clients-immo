<?php

namespace Immo\Models;

abstract class CoreModel {
    
    protected $id;

    /**
     * Get the value of id
     *
     * @return  string
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  string  $id
     */ 
    public function setId(string $id)
    {
        $this->id = $id;
    }
}