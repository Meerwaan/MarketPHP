<?php

session_start();

if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = array();
}

array_push($_SESSION['panier'], $_GET['productName']);

header('Location: accueil.php');

exit();