<?php

namespace AppStore\Controller;

use AppStore\Entity\Fruit;
use AppStore\Entity\Book;
use AppStore\Repository\ProductRepository;

class ProductController{

    private $productRepository;

    public function __construct(){
        $this->productRepository = new ProductRepository();
    }

    public function handleRequest(){
        $errors = [];
        if($_SERVER["REQUEST_METHOD"] = "POST"){
            if(empty($_POST['id']) or ($_POST['type']<>'fruit' and $_POST['type']<>'livre') or empty($_POST['price']) or empty($_POST['stock']))
            {
                $errors[] = "Veuillez remplir les champs correctement";
                return $errors;
            }

            if ($_POST['type'] == 'fruit'){
                if(empty($_POST['name'])){
                    $errors[] = "Veuillez insérer un nom";
                    return $errors;
                } else {
                    $fruit= new Fruit();
                    $fruit->setId($_POST['id']);
                    $fruit->setPrice($_POST['price']);
                    $fruit->setStock($_POST['stock']);
                    $fruit->setName($_POST['name']);
                    $this->productRepository->addFruit($fruit->getId(), $fruit->getPrice(), $fruit->getStock(), $fruit->getName());
                }
            } else {
                if(empty($_POST['author']) or empty($_POST['title'])){
                    $errors[] = "Veuillez insérer un titre et un auteur";
                    return($errors);
                }else {
                    $book= new Book();
                    $book->setId($_POST['id']);
                    $book->setPrice($_POST['price']);
                    $book->setStock($_POST['stock']);
                    $book->setTitle($_POST['title']);
                    $book->setAuthor($_POST['author']);
                    $this->productRepository->addBook($book->getId(), $book->getPrice(), $book->getStock(), $book->getTitle(), $book->getAuthor());
                }
            }
            header('Location: /');
            exit();
        }
    }

    public function getFruit(){
        return $this->productRepository->findAllFruit();
    }

    public function getBook(){
        return $this->productRepository->findAllBook();
    }


}