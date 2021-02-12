<?php

session_start();

require_once '../database/database.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="header/header.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <title>Accueil</title>
</head>
<body >
<?php 
include 'header/header.php';

print_r($_SESSION['panier']); // enlever le print quand la boucle est faite 
// faire une boucle for pour le contenue du tableau du panier 
?>

<h1> Jeux Vidéos </h1>
<div class="item">

    <?php $products = $pdo->query('SELECT * FROM products'); ?>
    <?php foreach ( $products as $product); ?>
    <div class="box-item">
        <?= $product->name; ?>
        <img class="img1" src="../img/fifa21.PNG" alt="">
        <p><?= $product->price; ?> €</p>
        <img class="img2" src="../img/stars.PNG" alt="">
        <p>Dispo</p>
        <a ><button name="submit" href="addpanier.php?id=<?= $product->id; ?>">Ajouter au Panier</button></a>
    </div>
    <div class="box-item">
        <p>COD Cold War</p>
        <img class="img1" src="../img/COD.JPG" alt="">
        <p>Prix: 60€</p>
        <img class="img2" src="../img/stars.PNG" alt="">
        <p>Dispo</p>
        <a href="cart.php?productName=CODColdWar" name="submit">Ajouter au Panier</a>
    </div>
    <div class="box-item">
        <p>Watch Dog Legion</p>
        <img class="img1" src="../img/WDL.JPG" alt="">
        <p>Prix: 50€</p>
        <img class="img2" src="../img/stars.PNG" alt="">
        <p>Dispo</p>
        <a href="cart.php?productName=WatchDogLegion" name="submit">Ajouter au Panier</a>
    </div>
    <div class="box-item">
        <p>Ass'Valhalla</p>
        <img class="img1" src="../img/ACV.JPG" alt="">
        <p>Prix: 70€</p>
        <img class="img2" src="../img/stars.PNG" alt="">
        <p>Dispo</p>
        <a href="cart.php?productName=Ass'Valhalla" name="submit">Ajouter au Panier</a>
    </div>
</div>

<h1> Consoles Next-Gen </h1>
<div class="item">
    <div class="box-item">
        <p>PS5</p>
        <img class="img1" src="../img/PS5.JPG" alt="">
        <p>Prix: 490€</p>
        <img class="img2" src="../img/stars.png" alt="">
        <p>Rupture </p>
        <a href="cart.php?productName=PS5" name="submit">Ajouter au Panier</a>
    </div>
    <div class="box-item">
        <p>Xbox Series X</p>
        <img class="img1" src="../img/Microsoft-Xbox-Series-X.JPG" alt="">
        <p>Prix: 500€</p>
        <img class="img2" src="../img/stars.PNG" alt="">
        <p>Rupture</p>
        <a href="cart.php?productName=XboxSeriesX" name="submit">Ajouter au Panier</a>
    </div>
    <div class="box-item">
        <p>Nintendo Switch</p>
        <img class="img1" src="../img/nintendo-switch.JPG" alt="">
        <p>Prix: 320€</p>
        <img class="img2" src="../img/stars.PNG" alt="">
        <p>Dispo</p>
        <a href="cart.php?productName=NintendoSwitch" name="submit">Ajouter au Panier</a>
    </div>
</div>

<h1> Abonnement Online </h1>
<div class="item">
    <div class="box-item">
        <p>Plasytion Plus</p>
        <img class="img1" src="../img/PsPLus.JPG" alt="">
        <p>Prix: 60€</p>
        <img class="img2" src="../img/stars.PNG" alt="">
        <p>Dispo</p>
        <a href="cart.php?productName=PlaystationPlus" name="submit">Ajouter au Panier </a>
    </div>
    <div class="box-item">
        <p>Xbox Live</p>
        <img class="img1" src="../img/xboxLive.JPG" alt="">
        <p>Prix: 60€</p>
        <img class="img2" src="../img/stars.png" alt="">
        <p>Dispo</p>
        <a href="cart.php?productName=XboxLive" name="submit">Ajouter au Panier</a>
    </div>
    <div class="box-item">
        <p>Nintendo Online</p>
        <img class="img1" src="../img/abSwitch.JPG" alt="">
        <p>Prix: 20€</p>
        <img class="img2" src="../img/stars.PNG" alt="">
        <p>Dispo</p>
        <a href="cart.php?productName=NintendoOnline" name="submit">Ajouter au Panier</a>
    </div>
</div>





    
</body>
</html>