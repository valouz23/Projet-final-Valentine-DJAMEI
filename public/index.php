<?php
require_once __DIR__ . '/../vendor/autoload.php';

use AppStore\Entity\Cart;
use AppStore\Entity\Fruit;
use AppStore\Entity\Book;
use AppStore\Controller\ProductController;

$user = new Cart(1);

$productController = new ProductController();
$fruit = $productController->getFruit();
$book = $productController->getBook();
$productController->handleRequest();

?>

<DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
        <div class="row">
            <div class="col-8 text-center">
                <h1>Des Fruits et des Livres</h1>
            </div>
            <div class="col-3 text-center">
                <button class ="btn btn-success mt-1" id="goToEmployee">Je travaille ici</button>
                <button class ="btn btn-warning mt-1" id="goToCustomer">Je suis client</button>
            </div>
        </div>

        <div class="row">
            <div id="ajoutBDD" class="text-center"></div>


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
                    <?php endforeach ?>
                </div>
            </div>


            <div class="text-center">
                <h2 class="text-danger"> Voici notre sélection de livres</h2>
                <div class="row">
                    <?php foreach($book as $b) : ?>
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
                                <!--button id="b<?php //echo $f['name'] ?>" class="btn btn-warning btn-outline-dark">Ajouter au panier</button-->
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>


        </div>
        <script src="./js/app.js"></script>
    </body>
</html>