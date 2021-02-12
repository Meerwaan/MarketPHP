<?php session_start(); ?>
<?php require'header/header.php'; 
require_once '../database/database.php';?>
<div class="checkout">
    <div class="title">
        <div class="wrap">
        <h2 class="first">Shopping Cart</h2>
        <a href="#" class="proceed">
            Proceed to checkout
        </a>
        </div>
    </div>
    <div class="table">
        <div class="wrap">

            <div class="rowtitle">
                <span class="name">Product name </span>
                <span class="price">Price </span>
                <span class="quantity">Quantity </span>
                <span class="subtotal">Subtotal </span>
                <span class="action">Actions </span>
            </div>

            <?php
            $ids = array_keys($_SESSION['panier']);
            if(empty($ids)){
                $products = array();
            }else{
                $products = $DB->query('SELECT * FROM products WHERE id IN ('.implode(',',$ids).')');
            }
            foreach($products as $product){
            ?>
            <div class="row">
            <a href="#" class="img"><img src="img/imgmin.png"></a>
                <span class="name"><?= $product->name; ?> </span>
                <span class="price"><?= $product->price; ?>€ </span>
                <span class="quantity"><?= $_SESSION['panier'][$product->id]; ?> </span>
                <span class="subtotal">€ 1320.09</span>
                <span class="action">
                    <a href="panier.php?delPanier=<?= $product->id; ?>" class="del"><img src="img/del.png"></a>
                </span>
            </div>
            <?php }?>
        <div class="rowtotal">
                Grand Total: <span class="total"><? number_format($panier->total(),2,',',' '); ?> €</span>
            </div>
        </div>
    </div>
</div>