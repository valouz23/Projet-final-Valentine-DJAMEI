<?php

namespace AppStore\Entity;

use AppStore\Entity\AbstractEntity\AbstractProduct;

class Book extends AbstractProduct{

    private string $title;
    private string $author;

    public function __construct()
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
