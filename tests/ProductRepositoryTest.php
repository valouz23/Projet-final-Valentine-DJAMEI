<?php

namespace AppStore\tests;

use PHPUnit\Framework\TestCase;
use AppStore\Repository\ProductRepository;

class ProductRepositoryTest extends TestCase {

    public function testFindBook()
    {
        $repository = new ProductRepository();
        $result = $repository->findBook("Alice au pays des merveilles");
        $this->assertEquals([["title"=>"Alice au pays des merveilles", "author" => "Lewis Carroll", "price"=>2, "stock"=>15]], $result);
    }

    public function testFindFruit()
    {
        $repository = new ProductRepository();
        $result = $repository->findFruit("Pomme");
        $this->assertEquals([["name"=>"Pomme", "price" => 2, "stock"=>42]], $result);
    }

    public function testAddFruit(){
        $repository = new ProductRepository();
        $repository->addFruit(10, 1, 1, "Fraise");
        $result = $repository->findFruit("Fraise");
        $this->assertEquals([["name"=>"Fraise", "price" => 1, "stock"=>1]], $result);
        $repository->removeProduct(10);
    }

    public function testAddBook(){
        $repository = new ProductRepository();
        $repository->addBook(11, 1, 1, "Emma", "Jane Austen");
        $result = $repository->findBook("Emma");
        $this->assertEquals([["title"=>"Emma", "author"=>"Jane Austen", "price" => 1, "stock"=>1]], $result);
    }

    public function testRemoveProduct(){
        $repository = new ProductRepository();
        $repository->removeProduct(11);
        $result = $repository->findBook("Emma");
        $this->assertEquals(array(), $result);
    }
}