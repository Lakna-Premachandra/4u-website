<?php

    $db_server= "localhost";
    $db_user = "root";
    $db_pass = "4You@123";
    $db_name = "u763611333_fouryoudb";
    $conn = "";

    try {
        $pdo= new PDO("mysql:host=$db_server;dbname=$db_name",$db_user,
        $db_pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $conn = mysqli_connect($db_server,
        $db_user,$db_pass,
        $db_name);


    }
    catch(PDOException $e) {

        die("Connection failed: ".$e->getMessage());
    }


?>