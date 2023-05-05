<?php

    // $host = 'localhost'; // can also be '127.0.0.1'
    // $db = 'studyphpform';
    // $user = 'root';
    // $pass = '';
    // $charset = 'utf8mb4';

//remote connection database
    $host = 'localhost'; // can also be '127.0.0.1'
    $db = 'studyphpform';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    //data source name
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";//driver

    try {

        $pdo = new PDO($dsn, $user, $pass);
        echo 'hello database';
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {

        throw new PDOException($e->getMessage());
    };

    require_once 'crud.php';
    $crud = new crud($pdo);

?>