<?php
require 'header.php';
if(isset($_GET['id'])){
    $product = $DB->query('SELECT id FROM products WHERE id=:id', array('id' => $_GET['id']));
    if(empty($product)){
        die("Ce produit n'existe pas");
    }
    $panier->add($product[0]->id);
    die('Le produit a bien était ajouter a votre panier <a href="javascript:history.back()">retourner sur le catalogue</a>');
}else{
    die("Vous n'avez pas sélectionné de produit a ajouter au panier");
}
var_dump($_GET);