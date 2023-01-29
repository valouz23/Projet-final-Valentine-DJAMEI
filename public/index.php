<?php
require __DIR__ . '\..\vendor\autoload.php';

//require_once '/../src/Entity/Cart.php';
//require_once('./src/Entity/Fruit.php');
//require_once('./src/Entity/Book.php');*/
use AppStore\Entity\Cart;
//use AppStore\Entity\Fruit;
//use AppStore\Entity\Book;

$user = new Cart(1);

var_dump($user);
