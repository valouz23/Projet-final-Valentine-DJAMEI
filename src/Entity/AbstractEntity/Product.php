<?php

namespace AppStore\Entity\AbstractEntity;

abstract class Product {

    private int $id;
    private string $type;
    private int $price;
    private int $stock;
    private string $description;

    public function __construct($id)
    {
        $this->id = $id;
        $this->description = "No description available\n";
    }

    public function setID($i)
    {
        $this->id = $i;
    }
    public function getID() : int
    {
        return($this->id);
    }

    public function setType($t)
    {
        if (!$t=='fruit' and !$t=='livre'){
            echo "Must be type fruit or livre \n";
        } else {
            $this->type = $t;
        }
    }
    public function getType() : string
    {
        return($this->type);
    }

    public function setPrice($p)
    {
        $this->price = $p;
    }
    public function getPrice() : int
    {
        return($this->price);
    }

    public function setStock($s)
    {
        $this->stock = $s;
    }
    public function getStock() : intdiv
    {
        return($this->stock);
    }

    public function setDesc($d)
    {
        $this->description = $d;
    }
    public function getDesc() : string
    {
        return($this->desciprion);
    }
}