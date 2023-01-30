<?php

namespace AppStore\Entity;

use Appstore\Entity\AbstractEntity\Product;

class Book extends Product{

    private string $title;
    private string $author;

    public function __construct($id)
    {
        $this->type = 'livre';
    }

    public function setTitle($t)
    {
        $this->title = $t;
    }
    public function getTitle() : string
    {
        return($this->title);
    }

    public function setAuthor($a)
    {
        $this->author = $a;
    }
    public function getAuthor() : string 
    {
        return($this->author);
    }
}

$book = new Book(2);
echo ($book->getId());