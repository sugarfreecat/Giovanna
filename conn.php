<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "giovanna_portal_noticias";

    try{
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $err){
        echo "Houve um erro na conexão: " . $err->getMessage();
        exit;
    }
?>