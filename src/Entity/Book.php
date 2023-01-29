<?php

namespace AppStore\Entity;

use Appstore\Entity\AbstractEntity\Product;

class Book extends Product{

    private string $title;
    private string $author;
    private string $nb_page;

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

    public function setNb_Page($n)
    {
        $this->nb_page = $n;
    }
    public function getNb_Page($n) : int 
    {
        return($this->nb_page);
    }
}