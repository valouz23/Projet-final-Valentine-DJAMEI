<?php
require_once __DIR__ . '/../vendor/autoload.php';

// require_once '/../src/Entity/Cart.php';
//require_once('./src/Entity/Fruit.php');
//require_once('./src/Entity/Book.php');*/
use AppStore\Entity\Cart;
use AppStore\Entity\Fruit;
use AppStore\Entity\Book;

$user = new Cart(1);

$connection = mysqli_connect('localhost', 'root', 'WINmaths42', 'magasin');
$sql_all_fruit = "SELECT name, price, stock, description FROM product WHERE type = 'fruit' ORDER BY name";
$sql_all_book = "SELECT title, author, price, stock, description FROM product WHERE type = 'livre' ORDER BY title";
$pdo = new PDO('mysql:host=localhost;dbname=magasin', 'root', 'WINmaths42',[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
$resultFruit = $pdo->query($sql_all_fruit);
$fruit = $resultFruit->fetchAll();
$resultBook = $pdo->query($sql_all_book);
$book = $resultBook->fetchAll();

?>

<DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
        <div class="text-center">
            <h1>Des Fruits et des Livres</h1>
        </div>

        <div class="row">

            <div class="text-center">
                <h2 class="text-success"> Voici notre sélection de fruits</h2>
                <div class="row">
                    <?php foreach($fruit as $f):?>

                        <div class="col-md-4 mb-3">
                            <div class="card text-bg mb-3 shadow">
                                <!--img class="card-img-top" src=""-->
                                <div class="card-body">
                                    <div class="card-title">
                                        <h2><?php echo($f['name']) ?></h2>
                                    </div>
                                    <ul class="list-group, list-flush">
                                        <li class="list-group-item"> <h4>Prix : <?php echo($f['price'] . ' euros') ?></h4></li>
                                        <li class="list-group-item"> <h4>Stocks disponibles : <?php echo $f['stock'] ?></h4></li>
                                        <li class="list-group-item"> <h4>Description : <?php echo $f['description'] ?></h4></li>
                                    </ul>
                                    <button id="b<?php echo $f['name'] ?>" class="btn btn-warning btn-outline-dark">Ajouter au panier</button>
                                </div>
                            </div>
                        </div>


                        <!--div class="card text-bg mb-3 shadow">
                            <div class="card-body text-center">
                                <img src="" class="card-img-bottom">
                                <div class="card-title">
                                    <h3 class="text-danger"></h3>
                                </div>
                                <p class="card-text">
                                    <h6>Prix : </h6>
                                    <h6>Stock : </h6>
                                </p>
                                <button id="b<?php //echo $f['name'] ?>" class="btn btn-warning btn-outline-dark">Ajouter au panier</button>
                            </div>
                        </div-->
                    <?php endforeach ;?>
                </div>
            </div>


            <div class="text-center">
                <h2 class="text-warning"> Voici notre sélection de livres</h2>

            </div>


        </div>
    </body>
</html>