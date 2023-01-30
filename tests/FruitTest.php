<?php

namespace AppStore\tests;

use PHPUnit\Framework\TestCase;
use AppStore\Entity\Fruit;

class FruitTest extends TestCase {

    public function testIdFruit(){
        $Fruit = new Fruit();
        $Fruit->setId(2);
        $this->assertEquals(2, $Fruit->getId());
    }

    public function testPriceFruit(){
        $Fruit = new Fruit();
        $Fruit->setPrice(2);
        $this->assertEquals(2, $Fruit->getPrice());
    }

    public function testStockFruit(){
        $Fruit = new Fruit();
        $Fruit->setStock(2);
        $this->assertEquals(2, $Fruit->getStock());
    }

    public function testDescFruit(){
        $Fruit = new Fruit();
        $Fruit->setDesc("It's a Fruit");
        $this->assertEquals("It's a Fruit", $Fruit->getDesc());
    }

    public function testNameFruit(){
        $Fruit = new Fruit();
        $Fruit->setName("Pomme");
        $this->assertEquals("Pomme", $Fruit->getName());
    }

}