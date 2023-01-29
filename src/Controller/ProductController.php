<?php

namespace AppStore\Controller;

use AppStore\Entity\Fruit;
use AppStore\Entity\Book;
use AppStore\Entity\Cart;
use AppStore\Repository\ProductRepository;

class ProductController{

    private $productRepository;

    public function __construct(){
        $this->productRepository = new ProductRepository();
    }

    public function handleRequest(){
        
    }
}