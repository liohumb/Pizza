<?php session_start();
require_once("dbcontroller.php");


$db_handle= new DBcontroller();
if(!empty($_GET["action"])) {
    switch($_GET["action"]) {
        case "retire":
            if(!empty($_SESSION["Panier_item"])) {
                foreach($_SESSION["Panier_item"] as $k => $v) {
                    if($_GET["id"] === $k){
                        unset($_SESSION["Panier_item"][$k]);
                    }
                }
            }
            break;
        case "vider":
            unset($_SESSION["Panier_item"]);
            break;
    }
}
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

<main class="home" id="home">
    <section class="cart section">
        <?php
        if(isset($_SESSION["Panier_item"])){
            $quantityTotal = 0;
            $PrxTotal = 0;
            ?>
            <div class="cart__container container grid">
            <?php
            foreach($_SESSION["Panier_item"]as $item){
                $item_prix = $item["quantity"]*$item["price"];
                ?>

                <div class="cart__img">
                    <div class="cart__img-overlay">
                        <img src="<?php echo $item["img_path"];?>" alt="" class="cart__img-one">
                    </div>
                </div>

                <div class="cart__data">
                    <h1 class="cart__product-name"><?php echo $item["name"]?></h1>
                    <h2 class="cart__product-price"><?php echo $item_prix . " €"; ?></h2>
                    <ul class="cart__preferences">
                        <li>
                            <span class="cart__preferences-list">Quantité :</span>
                            <a href=""><i class="uil uil-minus"></i></a>
                            <span class="cart__preferences-listName"><?php echo $item["quantity"]; ?></span> <!-- recupere la quantité choicie qui a pour nom quantity -->
                            <a href=""><i class="uil uil-plus"></i></a>
                        </li>
                    </ul>
                    <span class="cart__product-priceUnit">Prix unitaire :<?php echo $item["price"] . " €"; ?></b></span>
                </div>
                </div>

                <div class="cart__recap">
                    <div class="cart__recap-title">
                        <h2 class="section__title">Récapitulatif</h2>
                    </div>
                    <div class="cart__recap-total">
                        <h2 class="section__title">Sous-total : <b><?php echo  number_format($item_prix,2) . " €"; ?></b></h2>
                        <h2 class="section__title">Livraison : <b>3.50 €</b></h2>
                        <br>
                        <h2 class="section__title">Total : <b><?php echo (number_format($item_prix,2) + 3.50) . " €"; ?></b></h2>

                    </div>
                </div>
                <?php
                $quantityTotal += $item["quantity"];
                $PrxTotal += ($item["price"]*$item["quantity"]);
            }
            ?>
            <div class="cart__button">
                <a href="menu.php" class="cart__button-option button">Retour au menu</a>
                <a href="panier.php?action=vider" class="cart__button-trash">Vider le panier</a>
                <a href="#" class="cart__button-option button">Valider mon panier</a>
            </div>
            <?php
        }

        else{
            ?>

            <div class="cart__data-empty">
                <h1 class="cart__product-name">Votre Panier est vide</h1>
            </div>
            <div class="cart__button">
                <a href="menu.php" class="cart__button-option button">Retour au menu</a>
            </div>


            <?php
        }
        ?>

    </section>


</main>
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
</body>
</html>