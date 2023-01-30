<?php

namespace AppStore\tests;

use PHPUnit\Framework\TestCase;
use AppStore\Entity\Book;

class BookTest extends TestCase {

    public function testIdBook(){
        $book = new Book();
        $book->setId(1);
        $this->assertEquals(1, $book->getId());
    }

    public function testPriceBook(){
        $book = new Book();
        $book->setPrice(1);
        $this->assertEquals(1, $book->getPrice());
    }

    public function testStockBook(){
        $book = new Book();
        $book->setStock(1);
        $this->assertEquals(1, $book->getStock());
    }

    public function testDescBook(){
        $book = new Book();
        $book->setDesc("It's a book");
        $this->assertEquals("It's a book", $book->getDesc());
    }

    public function testTitleBook(){
        $book = new Book();
        $book->setTitle("Alice au pays des merveilles");
        $this->assertEquals("Alice au pays des merveilles", $book->getTitle());
    }

    public function testAuthorBook(){
        $book = new Book();
        $book->setAuthor("Lewis Carroll");
        $this->assertEquals("Lewis Carroll", $book->getAuthor());
    }
}