<?php

session_start();

require_once '../database/database.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="style.css">
    <title>Accueil</title>
</head>
<body >
<?php 
include 'header/header.php';
?>

<h1> Jeux Vidéos </h1>
<div class="item">
    <div class="box-item">
        <p>Fifa 21</p>
        <img class="img1" src="../img/fifa21.PNG" alt="">
        <p>Prix: 80€</p>
        <p>Dispo</p>
        <a ><button name="submit">Ajouter au Panier</button></a>
    </div>
    <div class="box-item">
        <p>COD Cold War</p>
        <img class="img1" src="../img/COD.JPG" alt="">
        <p>Prix: 60€</p>
        <p>Dispo</p>
        <button name="submit">Ajouter au Panier</button>
    </div>
    <div class="box-item">
        <p>Watch Dog Legion</p>
        <img class="img1" src="../img/WDL.JPG" alt="">
        <p>Prix: 50€</p>
        <p>Dispo</p>
        <button name="submit">Ajouter au Panier</button>
    </div>
    <div class="box-item">
        <p>Ass'Valhalla</p>
        <img class="img1" src="../img/ACV.JPG" alt="">
        <p>Prix: 70€</p>
        <p>Dispo</p>
        <button name="submit">Ajouter au Panier</button>
    </div>
</div>

<h1> Consoles Next-Gen </h1>
<div class="item">
    <div class="box-item">
        <p>PS5</p>
        <img class="img1" src="../img/PS5.JPG" alt="">
        <p>Prix: 490€</p>
        <p>Rupture </p>
        <a ><button name="submit">Ajouter au Panier</button></a>
    </div>
    <div class="box-item">
        <p>Xbox Series X</p>
        <img class="img1" src="../img/Microsoft-Xbox-Series-X.JPG" alt="">
        <p>Prix: 500€</p>
        <p>Rupture</p>
        <button name="submit">Ajouter au Panier</button>
    </div>
    <div class="box-item">
        <p>Nintendo Switch</p>
        <img class="img1" src="../img/nintendo-switch.JPG" alt="">
        <p>Prix: 320€</p>
        <p>Dispo</p>
        <button name="submit">Ajouter au Panier</button>
    </div>
</div>

<h1> Abonnement Online </h1>
<div class="item">
    <div class="box-item">
        <p>Plasytion Plus</p>
        <img class="img1" src="../img/PsPLus.JPG" alt="">
        <p>Prix: 60€</p>
        <p>Dispo</p>
        <a ><button name="submit">Ajouter au Panier</button></a>
    </div>
    <div class="box-item">
        <p>Xbox Live</p>
        <img class="img1" src="../img/xboxLive.JPG" alt="">
        <p>Prix: 20€</p>
        <p>Dispo</p>
        <button name="submit">Ajouter au Panier</button>
    </div>
    <div class="box-item">
        <p>Nintendo Online</p>
        <img class="img1" src="../img/abSwitch.JPG" alt="">
        <p>Prix: 60€</p>
        <p>Dispo</p>
        <button name="submit">Ajouter au Panier</button>
    </div>
</div>





    
</body>
</html>