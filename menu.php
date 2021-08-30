<?php
session_start();
require_once "models/products.models.php";
require_once "models/category.model.php";
    require_once("dbcontroller.php");// lance la connexion a la base de donnée;
    $db_handle= new DBcontroller();//lance la connexion a la base de donnée;
    $categories = $db_handle->runQuery("SELECT * FROM category"); //va rechercher tout ce que contient category présente dans la base de donnée;
    $products= $db_handle->runQuery("SELECT * FROM produit");//va chercher tout ce que contient présente dans la base de donnée
?>

<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
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

<main class="menu" id="menu">

    <section class="discover section" id="discover">
        <h1 class="home__data-title menu_title">Vous avez faim ?</h1>
        <p class="menu_title">Faites votre choix</p>
            <?php
                foreach($categories as $category){ // parcour chaque element dans category pour éxecuter ce qui suit pour chacune d'elle
                        $filteredProducts = array_filter($products, function($item) use($category){
                            if($item['category_id'] == $category['id']){
                                return $item; // item filtre les produit qui ont pour catégory_id l'ID de la category
                            }
                        });
                        ?>
                    <h2 class="section__title menu_pizza"><?=$category['name'] ?></h2> <!-- place le 'name' présent dans category -->
                    <div class="discover__container container swiper-container">

                            <div class="swiper-wrapper">
                            <?php foreach($filteredProducts as $produit){ // parcour pour chaque Produit filtrer précedament
                            ?>
                                <div class="discover__card swiper-slide">


                                    <div onclick = "window.location='produits.php?id=<?= $produit['id'] ?>'">
                                        <img src="<?= $produit['img_path'] ?>" alt="" class="discover__img"> <!-- recupere la colone ,img_path, dans la table produit present dans la BA qui contient la source de l'image ,le chemin -->
                                        <div class="discover__data">
                                            <h2 class="discover__title"><?= $produit['name'] ?></h2><!-- recupere la colone ,name, de la table produit -->
                                        </div>
                                    </div>
                                </div>



                    <?php 

                                 } // une fois ici on a parcouru chaque category ,récuperer le nom de la category ,pour ensuite intégret chaque produit qui avais pour category_id l'id de la category, affin d'avoir le menu .
                    ?>
                    </div>
                        </div>
                    <?php

                 }
                    ?>

        <h2 class="section__title menu_dessert">Récapitulatif</h2>
    </section>
</main>

    <footer class="footer section">
        <div class="footer__container container grid">
            <div class="footer__content grid">
                <div>
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="assets/js/vicopo.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>