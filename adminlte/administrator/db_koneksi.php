<?php 
    //set nilai yg diperlukan
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'db_puskesmas'; //nama databases yg ada di mysql
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    //options
    $options = [
        PDO ::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION,
        PDO :: ATTR_DEFAULT_FETCH_MODE => PDO:: FETCH_ASSOC,
        PDO :: ATTR_EMULATE_PREPARES => false,
    ];

    //buat instance dari class PDO
    $dbh = new PDO($dsn, $user, $pass, $options);
?>