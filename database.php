<?php
/*
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
            id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            type VARCHAR(5) NOT NULL,
            price INT(10),

            name VARCHAR(30),

            )";

private int $id;
private string $type;
private int $price;
private int $stock;
private string $description;

if(!mysqli_query($connection, $sql_user)) {
    echo 'Error creating table user : ' . mysqli_error($connection);
}else{
    echo 'Table user created successfully' . PHP_EOL;
}

$sql_message = "CREATE table IF NOT EXISTS message(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            author varchar(30) NOT NULL,
            content text NOT NULL,
            created_at DATETIME NOT NULL
            )";

if(!mysqli_query($connection, $sql_message)) {
    echo 'Error creating table message : ' . mysqli_error($connection);
}else{
    echo 'Table message created successfully' . PHP_EOL;
}

mysqli_close($connection);*/