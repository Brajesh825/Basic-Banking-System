<?php
    $host = 'localhost';
    $db = 'attendence_db';
    $user = 'root';
    $pass = 'password';
    $charset = 'utf8mb4';

    error_reporting(0);

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try {
        $pdo = new PDO($dsn,$user,$pass);
    }catch(PDOException $e){
          throw new PDOException($e->getMessage());
    }

?>