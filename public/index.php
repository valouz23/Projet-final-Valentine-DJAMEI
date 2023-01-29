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
$sql_all_book = "SELECT title, author, nb_page, price, stock, description FROM product WHERE type = 'livre' ORDER BY title";
$pdo = new PDO('mysql:host=localhost;dbname=magasin', 'root', 'WINmaths42',[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
$result = $pdo->query($sql_all_fruit);
$fruit = $result->fetchAll();

?>

<DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
        <div>
            <h1>Des Fruits et des Livres</h1>
        </div>

        <div>
            <h2> Voici notre sélection de fruits</h2-->
            <?php foreach($fruit as $f):?>
                <div class="card text-bg-dark mb-3 shadow">
                <div class="card-body text-center">
                    <!-- <img src="" class="card-img-bottom"> -->
                    <div class="card-title">
                        <h3 class="text-warning"><?php echo($f['name']) ?></h3>
                    </div>
                    <p class="card-text">
                        <h3>Prix : <?php echo($f['price'] . ' euros') ?></h3>
                        <h3>Stock : <?php echo $f['stock'] ?></h3>
                    </p>
                    <button id="b<?php echo $f['name'] ?>" class="btn btn-warning btn-outline-dark">Ajouter au panier</button>
                </div>
            </div>
            <?php endforeach ;?>
            <h2> Voici notre sélection de livres</h2>
        </div>
    </body>
</html>