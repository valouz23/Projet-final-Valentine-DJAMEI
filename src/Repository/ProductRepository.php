<?php

namespace AppStore\Repository;

use AppStore\Connection;

class ProductRepository {

    private $connection;

    public function __construct(){
        $this->connection = Connection::getConnection();
    }

    public function findAllFruit() : array
    {
        $sql = "SELECT id, name, price, stock FROM product WHERE type = 'fruit' ORDER BY name";
        return $this->connection->query($sql)->fetchAll();
    }

    public function findAllBook() : array
    {
        $sql = "SELECT id, title, author, price, stock FROM product WHERE type = 'livre' ORDER BY title";
        return $this->connection->query($sql)->fetchAll();
    }

    public function findBook(string $title) : array
    {
        $sql = "SELECT title, author, price, stock FROM product WHERE type = 'livre' AND title = '$title'";
        return $this->connection->query($sql)->fetchAll();
    }

    public function findFruit(string $name) : array
    {
        $sql = "SELECT name, price, stock FROM product WHERE type = 'fruit' AND name = '$name'";
        return $this->connection->query($sql)->fetchAll();
    }

    public function addFruit(int $id, int $price, int $stock, string $name){
        $sql = "INSERT INTO product values ($id, 'fruit', $price, $stock, NULL, '$name', NULL, NULL)";
        $this->connection->query($sql);
    }

    public function addBook(int $id, int $price, int $stock, string $title, string $author){
        $sql = "INSERT INTO product values ($id, 'livre', $price, $stock, NULL, NULL, '$title', '$author')";
        $this->connection->query($sql);
    }

    public function removeProduct(int $id){
        $sql = "DELETE FROM product WHERE id = $id"
        ;
        $this->connection->query($sql);
    }
}