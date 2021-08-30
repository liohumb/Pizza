<?php
session_start();
require_once("dbcontroller.php");
$db_handle= new DBcontroller();

include_once 'ajout-panier.php';
// if(!empty($_POST["ajoute"])){

//     if(!empty($_POST["quantity"])){
//         $produitById = $db_handle->runQuery("SELECT * FROM produit WHERE id='" . $_POST["id"] . "'");
//         $itemArray = array($produitById[0]["id"]=>array('name'=>$produitById[0]["name"], 'id'=>$produitById[0]["id"], 'quantity'=>$_POST["quantity"], 'img_path'=>$produitById[0]["img_path"]));

//         if(!empty($_SESSION["Panier_item"])){
//             if(in_array($produitById[0]["id"],array_keys($_SESSION["Panier_item"]))){
//                 foreach($_SESSION["Panier_item"]as $k => $v){
//                     if($produitById[0]["id"] == $k){
//                         if(empty($_SESSION["Panier_item"][$k]["quantity"])){
//                             $_SESSION["Panier_item"][$k]["quantity"]=0;
//                         }
//                         $_SESSION["Panier_item"][$k]["quantity"] += $_POST["quantity"];
//                     }
//                 }

//             }
//             else{
//                 $_SESSION["Panier_item"] = array_merge($_SESSION["Panier_item"],$itemArray);
//             }
//         }
//         else{
//             $_SESSION["Panier_item"] = $itemArray;
//         }
//     }
// }
$id=$_GET['id'] ?? 1;
$product = $db_handle->runQuery("SELECT * FROM produit WHERE id=$id");
$price = $db_handle->runQuery("SELECT * FROM price WHERE produit_id=$id");
$size =$db_handle->runQuery("SELECT * FROM option_product");
?>



<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/produit.css">
    <title>Pizza</title>
</head>
<body>
<header class="header nav__menu-page" id="header">
        <nav class="nav container">
            <a href="index.php" class="nav__logo">LORENZZO'S PIZZA</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li>
                        <a href="menu.php" class="nav__link">Le menu</a>
                    </li>
                    <li>
                        <a href="contact.php" class="nav__link">Nous contacter</a>
                    </li>
                    <li>
                        <a href="inscription.php" class="btn-conn">Inscription</a>
                        |
                        <a href="connexion.php" class="btn-conn">Connexion</a>
                        <!--
                        <a href="" class="btn-conn">Mon compte</a>
                        |
                        <a href="" class="btn-conn">Déconnexion</a>
                        -->
                    </li>
                </ul>

                <i class="uil uil-times nav__close" id="nav-close"></i>
            </div>


            <a href="panier.php" class="nav__link"><i class="uil uil-pizza-slice nav__logo-cart"></i></a>

            <div class="nav__toggle" id="nav-toggle">
                <i class="uil uil-bars"></i>
            </div>
        </nav>
    </header>

    <section class="products section">
        <div class="about__container container grid">

            <div class="about__img">
                <div class="about__img-overlay">
                    <img src="<?= $product[0]['img_path'] ?>" alt="" class="about__img-two">
                </div>
            </div>
            <form class="calculate" method="post" action="">
            <div class="contact__data">
                <h1 class="product-name"><?= $product[0]['name'] ?></h1>
                <h2 class="product-price"><?= $price[0]['price'] ." €"?></h2>
                <h3 class="product-slogan"><?= $product[0]['details'] ?></h3>
                <ul class="preferences">
                    <li>
                        <?php
                        if ($product[0]['category_id']== 1 ||$product[0]['category_id']== 2){
                            ?>
                        
                        <span class="list-name">Taille (en cm) :</span>
                        <select class="taille">
                            <option value="<?= $size[0]['opt'] ?>"><?= $size[0]['opt'] ?></option>
                            <option value="<?= $size[1]['opt'] ?>"><?= $size[1]['opt'] ?></option>
                            <option value="<?= $size[2]['opt'] ?>"><?= $size[2]['opt'] ?></option>
                        </select>
                        <?php
                    }
                     elseif($product[0]['category_id']== 3 && ($product[0]['name'] !='Vin ')){
                         ?>
                              <span class="list-name">Taille (en cl) :</span>
                        <select class="taille">
                            <option value="<?= $size[10]['opt'] ?>"><?= $size[10]['opt'] ?></option>
                            <option value="<?= $size[11]['opt'] ?>"><?= $size[11]['opt'] ?></option>
                        
                        </select>
                     

                        <?php 
                        }elseif($product[0]['name'] == 'Vin '){?>
                            <span class="list-name">Robe :</span>
                        <select class="taille">
                            <option value="<?= $size[7]['opt'] ?>"><?= $size[7]['opt'] ?></option>
                            <option value="<?= $size[8]['opt'] ?>"><?= $size[8]['opt'] ?></option>
                            <option value="<?= $size[9]['opt'] ?>"><?= $size[9]['opt'] ?></option>
                        </select>
                    <?php
                    }
                        
                        elseif($product[0]['name'] == 'Glace'){?>
                            <span class="list-name">Parfum :</span>
                        <select class="taille">
                            <option value="<?= $size[3]['opt'] ?>"><?= $size[3]['opt'] ?></option>
                            <option value="<?= $size[4]['opt'] ?>"><?= $size[4]['opt'] ?></option>
                            <option value="<?= $size[5]['opt'] ?>"><?= $size[5]['opt'] ?></option>
                            <option value="<?= $size[6]['opt'] ?>"><?= $size[6]['opt'] ?></option>
                        </select>
                    <?php
                    }
                        ?>
                    </li>
                    <li>
                    
                        <span class="list-name">Quantité :</span>
                        <select name="quantity" class="qty">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </li>
                </ul>
            </div>
        </div>
        <div class="btn-choix">
            <a href="menu.php" class="button btn-ret-aj">Retour au menu</a>
         
             <input type="hidden" name="id" value ="<?=$id?>">
            <input type ="submit" name="ajoute" class="button btn-ret-aj" value="Ajouter au panier"></input>
        </form>
        </div>
    </section>
    <section class="discover section" id="discover">
        <h2 class="section__title">Vous n'avez pas soif ?</h2>

        <div class="discover__container container swiper-container">
            <div class="swiper-wrapper">
                <div class="discover__card swiper-slide">
                    <a href="../produit/schweppes.php">
                        <img src="assets/img/drink1.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">Schweppes</h2>
                        </div>
                    </a>
                </div>

                <div class="discover__card swiper-slide">
                    <a href="../produit/carlsberg.php">
                        <img src="assets/img/drink2.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">Carlsberg</h2>
                        </div>
                    </a>
                </div>

                <div class="discover__card swiper-slide">
                    <a href="../produit/coca.php">
                        <img src="assets/img/drink3.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">Coca Cola</h2>
                        </div>
                    </a>
                </div>

                <div class="discover__card swiper-slide">
                    <a href="../produit/vin.php">
                        <img src="assets/img/drink4.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">Vin </h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

<footer class="footer section">
    <div class="footer__container container grid">
        <div class="footer__content grid">
            <div class="footer__data">
                <h3 class="footer__title">LORENZZO'S PIZZA</h3>
                <p class="footer__description">Venez manger de <br> délicieuses pizzas.
                </p>
            </div>

            <div class="footer__data">
                <h3 class="footer__subtitle">A propos</h3>
                <ul>
                    <li class="footer__item">
                        <a href="#about" class="footer__link">À propos de nous</a>
                    </li>
                    <li class="footer__item">
                        <a href="menu.php" class="footer__link">Nos pizza</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer__rights">
            <p class="footer__copy">&#169; 2021 Pizza | Agence SHARK</p>
        </div>
    </div>
</footer>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="js/select.js"></script>
</body>
</html>