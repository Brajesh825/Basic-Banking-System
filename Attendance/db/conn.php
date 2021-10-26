<?php
    $host = 'localhost';
    $db = 'attendence_db';
    $user = 'root';
    $pass = 'password';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try {
        $pdo = new PDO($dsn,$user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
          throw new PDOException($e->getMessage());
    }

    require './db/crud.php';
    require './user.php';
    $crud = new crud($pdo);
    $user = new user($pdo);

?>