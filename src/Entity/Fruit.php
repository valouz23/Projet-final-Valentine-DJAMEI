<?php

namespace AppStore\Entity;

use Appstore\Entity\AbstractEntity;

class Fruit extends Product{

    private string $name;
    
    public function __construct($id)
    {
        $this->type = 'fruit';
    }

    public function setName($n)
    {
        $this->name = $n;
    }
    public function getName() : string 
    {
        return($this->name);
    }
}