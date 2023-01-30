<?php

namespace AppStore\Entity\AbstractEntity;

abstract class AbstractProduct {

    private int $id;
    private string $type;
    private int $price;
    private int $stock;
    private string $description = "No description available";

    public function setId($i)
    {
        $this->id = $i;
    }

    public function getId()
    {
        return ($this->id);
    }

    public function setType($t)
    {
        if (!$t=='fruit' and !$t=='livre'){
            return ("Must be type fruit or livre \n");
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
    public function getStock() : int
    {
        return($this->stock);
    }

    public function setDesc($d)
    {
        $this->description = $d;
    }
    public function getDesc() : string
    {
        return($this->description);
    }
}
