<?php

namespace AppStore\Entity;

use Appstore\Entity\AbstractEntity\Product;

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

$fruit = new Fruit(1);
echo($fruit->getID());