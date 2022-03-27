<?php
    $host = 'localhost';
    $db = 'registration_db';
    $user = 'root';
    $pass = '';



    // $host = 'sql6.freesqldatabase.com';
    // $db = 'sql6481159';
    // $user = 'sql6481159';
    // $pass = 'UKSc6K2SzE';

    // $host = 'remotemysql.com';
    // $db = '17oLKc2TJZ';
    // $user = '17oLKc2TJZ';
    // $pass = 'swMJUQYdUg';

    $charset = 'utf8mb4';
    $dsn ="mysql: host=$host; dbname=$db; charset=$charset";



    try{
        $pdo = new PDO($dsn,$user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    $crud = new crud($pdo);
?>