<?php

namespace AppStore\Entity;

class Cart {

    private int $id;
    private array $list_product= array();

    public function setId($i)
    {
        $this->id = $i;
    }
    public function getId() : int
    {
        return($this->id);
    }

    public function addProduct($p) : mixed
    {
        if ($p->stock <= 0){
            return('Not in stock at the moment');
        } else {
            $p->stock -=1;
            array_push($this->list_product, $p);
        }
    }
    public function removeProduct($p)
    {
        $key = array_search($p,$this->list_product);
        if ($key == false){
            return('Not such product in your cart');
        } else {
            $p->stock +=1;
            $a = array_shift($this->list_product);
            if ($key <> 0){
                array_replace($this->stock, array($key=>$a));
            }
        }
    }
}