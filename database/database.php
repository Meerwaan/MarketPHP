<?php

    // Création de la base de donnée
    $servname = "localhost"; 
    $dbname = "shop_project";
    $user = "root"; 
    $pass = "root"; 

    $pdo = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass); // je me connecte

    //On gère les exceptions
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    ?>