<?php
session_start();
require_once "models/products.models.php";
require_once "models/category.model.php";
    require_once("dbcontroller.php");// lance la connexion a la base de donnée;
    $db_handle= new DBcontroller();//lance la connexion a la base de donnée;
    $categories = $db_handle->runQuery("SELECT * FROM category"); //va rechercher tout ce que contient category présente dans la base de donnée;
    $products= $db_handle->runQuery("SELECT * FROM produit");//va chercher tout ce que contient présente dans la base de donnée
?>

<?php include ('base/head.php') ?>

<?php include ('base/header.php')?>

<main class="menu" id="menu">

<section class="hero">

    <img src="assets/img/home1.jpg" alt="" class="hero__img">

</section>

    <section class="menu_section section">

        <h1 class="menu__data-title">Vous avez faim ?</h1>

        <p class="menu__data-subtitle">Faites votre choix</p>

            <?php
                foreach($categories as $category){ // parcour chaque element dans category pour éxecuter ce qui suit pour chacune d'elle
                        $filteredProducts = array_filter($products, function($item) use($category){

                            if($item['category_id'] == $category['id']){
                                return $item; // item filtre les produit qui ont pour catégory_id l'ID de la category
                            }

                });
            ?>

                    <h2 class="section__title menu__category"><?=$category['name'] ?></h2> <!-- place le 'name' présent dans category -->

                    <div class="menu__container container swiper__container swiper-container">

                            <div class="swiper-wrapper">

                            <?php foreach($filteredProducts as $produit){ // parcour pour chaque Produit filtrer précedament ?>

                                <div class="menu__card swiper-slide">

                                    <div onclick = "window.location='produits.php?id=<?= $produit['id'] ?>'">

                                        <img src="<?= $produit['img_path'] ?>" alt="" class="menu__img"> <!-- recupere la colone ,img_path, dans la table produit present dans la BA qui contient la source de l'image ,le chemin -->

                                        <div class="menu__data">
                                            <h2 class="menu__data-titleProduct"><?= $produit['name'] ?></h2><!-- recupere la colone ,name, de la table produit -->
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

        <h2 class="section__title menu__recap">Récapitulatif</h2>

    </section>

</main>

<?php include ('base/footer.php') ?>

<?php include ('base/script.php') ?>