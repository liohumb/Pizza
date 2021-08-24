<?php
include("ajout-panier.php");
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "retire":
		if(!empty($_SESSION["Panier_item"])) {
			foreach($_SESSION["Panier_item"] as $k => $v) {
					if($_GET["id"] == $k){
						unset($_SESSION["Panier_item"][$k]);
                    }				
					if(empty($_SESSION["Panier_item"])){
						unset($_SESSION["Panier_item"]);
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
    <link rel="stylesheet" href="assets/css/panier.css">
    <title>Pizza</title>
</head>
<body>
<header class="header nav_menu-page" id="header">
    <nav class="nav container">
        <a href="#" class="nav__logo">LORENZZO'S PIZZA</a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="index.html" class="nav__link">Acceuil</a>
                </li>
                <li class="nav__item">
                    <a href="index.html#about" class="nav__link">À propos</a>
                </li>
                <li class="nav__item">
                    <a href="menu.html" class="nav__link">Le Menu</a>
                </li>
                <li class="nav__item">
                    <a href="contact.html" class="nav__link">Contact</a>
                </li>
            </ul>

            <i class="uil uil-times nav__close" id="nav-close"></i>
        </div>

        <a href="panier.html" class="nav__link nav__cart"><i class="uil uil-pizza-slice cart_logo"></i></a>


        <div class="nav__toggle" id="nav-toggle">
            <i class="uil uil-bars"></i>
        </div>
    </nav>

    <div class="connexion">
        <a href="inscription.html" class="btn-conn">Inscription</a>
        |
        <a href="connexion.html" class="btn-conn">Connexion</a>
    </div>

    <!--    <div class="connexion-bis">
            <a href="" class="btn-conn">Mon compte</a>
            |
            <a href="" class="btn-conn">Déconnexion</a>
        </div>
    -->
</header>

<main class="home" id="home">
    <section class="about section">
    <?php
                 if(isset($_SESSION["Panier_item"])){
                    $quantityTotal = 0;
                    $PrxTotal = 0;
                 ?>
        <div class="about__container container grid">
                    <?php
                       foreach($_SESSION["Panier_item"]as $item){
                        $item_prix = $item["quantity"]*$item["price"];
                    ?>

            <div class="about__img">
                <div class="about__img-overlay">
                    <img src="<?php echo $item["image"];?>" alt="" class="about__img-two">
                </div>
            </div>

            <div class="contact__data">
                <h1 class="product-name"><?php echo $item["name"]?></h1>
                <h2 class="product-price"><?php echo $item_prix . " €"; ?></h2>
                <ul class="preferences">
                    <li>
                        <span class="list-name">Quantité :</span>
                        <a href="" class="list-name"><i class="uil uil-minus"></i></a>
                        <span class="list-name"><?php echo $item["quantity"]; ?></span>
                        <a href="" class="list-name"><i class="uil uil-plus"></i></a>

                    </li>
                </ul>
                <span class="cart-subtitle">Prix unitaire :<?php echo $item["price"] . " €"; ?></b></span>
            </div>
        </div>

        <div class="recap">
            <div class="recap__title">
                <h2 class="section__title menu_suggestion">Récapitulatif</h2>
            </div>
            <div class="recap__total">
                <h2 class="section__title menu_suggestion">Sous-total : <b><?php echo  number_format($item_prix,2) . " €"; ?></b></h2>
                <h2 class="section__title menu_suggestion">Livraison : <b>3.50 €</b></h2>
                <br>
                <h2 class="section__title menu_suggestion">Total : <b><?php echo (number_format($item_prix,2) + 3.50) . " €"; ?></b></h2>

            </div>
        </div>
        <?php
                    $quantityTotal += $item["quantity"];
                    $PrxTotal += ($item["price"]*$item["quantity"]);
                    }
                ?>
                    <div class="btn-choix">
                    <a href="menu.html" class="button btn-ret-aj">Retour au menu</a>
                    <a href="testPanier.php?action=vider" class="button-supp">Vider le panier</a>
                    <a href="#" class="button btn-ret-aj">Valider mon panier</a>
                </div>
                <?php
                }

                else{
                    ?>
                                    
                            <div class="empty__cart">
                                    <h1 class="product-name">Votre Panier est vide</h1>
                            </div>
                            <div class="btn-choix">
                                <a href="menu.html" class="button btn-ret-aj">Retour au menu</a>
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
                <h3 class="footer__title">PIZZA</h3>
                <p class="footer__description">Venez manger de <br> délicieuses pizzas.
                </p>
            </div>

            <div class="footer__data">
                <h3 class="footer__subtitle">A propos</h3>
                <ul>
                    <li class="footer__item">
                        <a href="" class="footer__link">À propos de nous</a>
                    </li>
                    <li class="footer__item">
                        <a href="" class="footer__link">Nos pizza</a>
                    </li>
                </ul>
            </div>

            <div class="footer__data">
                <h3 class="footer__subtitle">Le Menu</h3>
                <ul>
                    <li class="footer__item">
                        <a href="" class="footer__link">Les pizzas</a>
                    </li>
                    <li class="footer__item">
                        <a href="" class="footer__link">Les boissons</a>
                    </li>
                    <li class="footer__item">
                        <a href="" class="footer__link">Les desserts</a>
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