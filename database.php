<?php

$connection = mysqli_connect('localhost', 'root', 'WINmaths42');
$sql_db = "CREATE DATABASE IF NOT EXISTS magasin";
if(!mysqli_query($connection, $sql_db)) {
    echo 'Error creating database : ' . mysqli_error($connection);
}else{
    echo 'Database created successfully' . PHP_EOL;
}


$connection = mysqli_connect('localhost', 'root', 'WINmaths42', 'magasin');
if(!$connection) {
    die('Connection failed: ' . mysqli_connect_error());
}else{
    echo 'Connected successfully' . PHP_EOL;
}


$sql_product = "CREATE table IF NOT EXISTS product(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            type VARCHAR(5) NOT NULL,
            price INT(6) NOT NULL,
            stock INT(6) NOT NULL,
            description VARCHAR(255),
            name VARCHAR(50),
            title VARCHAR(50),
            author VARCHAR(50)
            )";

if(!mysqli_query($connection, $sql_product)) {
    echo 'Error creating table product : ' . mysqli_error($connection);
}else{
    echo 'Table product created successfully' . PHP_EOL;
}

$sql_cart = "CREATE table IF NOT EXISTS cart(
            id INT(6) NOT NULL,
            num_product INT(6) NOT NULL,
            quantity INT(6) NOT NULL
            )";

if(!mysqli_query($connection, $sql_cart)) {
    echo 'Error creating table cart : ' . mysqli_error($connection);
}else{
    echo 'Table cart created successfully' . PHP_EOL;
}


mysqli_close($connection);


// $sql_drop_data = "DROP DATABASE magasin";
// if(!mysqli_query($connection, $sql_drop_data)) {
//         echo 'Error deleting database magasin : ' . mysqli_error($connection);
//     }else{
//         echo 'Database magasin deleted successfully' . PHP_EOL;
//     }