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
<header class="header nav_menu-page" id="header">
    <nav class="nav container">
        <a href="index.php" class="nav__logo">LORENZZO'S PIZZA</a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="index.php" class="nav__link">Acceuil</a>
                </li>
                <li class="nav__item">
                    <a href="index.php" class="nav__link">À propos</a>
                </li>
                <li class="nav__item">
                    <a href="menu.php" class="nav__link">Le Menu</a>
                </li>
                <li class="nav__item">
                    <a href="contact.php" class="nav__link">Contact</a>
                </li>
            </ul>

            <i class="uil uil-times nav__close" id="nav-close"></i>
        </div>

        <a href="panier.php" class="nav__link nav__cart"><i class="uil uil-pizza-slice cart_logo"></i></a>

        <div class="nav__toggle" id="nav-toggle">
            <i class="uil uil-bars"></i>
        </div>
    </nav>

    <div class="connexion">
        <a href="inscription.php" class="btn-conn">Inscription</a>
        |
        <a href="connexion.php" class="btn-conn">Connexion</a>
    </div>

<!--    <div class="connexion-bis">
        <a href="" class="btn-conn">Mon compte</a>
        |
        <a href="" class="btn-conn">Déconnexion</a>
    </div>
-->

</header>

<main class="home" id="home">

    <section class="discover section" id="discover">
        <h1 class="home__data-title menu_title">Vous avez faim ?</h1>
        <p class="menu_title">Faites votre choix</p>

        <h2 class="section__title menu_suggestion">Nos suggestions</h2>

        <div class="discover__container container swiper-container">
            <div class="swiper-wrapper">
                <div class="discover__card swiper-slide">
                    <img src="assets/img/pizza1.jpg" alt="" class="discover__img">
                    <div class="discover__data">
                        <h2 class="discover__title">Nos pizza fait maison</h2>
                    </div>
                </div>

                <div class="discover__card swiper-slide">
                    <a href="produit/chorizzo.php">
                        <img src="assets/img/pizza2.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">La chorizzo</h2>
                        </div>
                    </a>
                </div>

                <div class="discover__card swiper-slide">
                    <a href="produit/poulette.php">
                        <img src="assets/img/pizza3.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">La poulette</h2>
                        </div></a>
                </div>

                <div class="discover__card swiper-slide">
                    <a href="produit/enfant.php">
                        <img src="assets/img/pizza4.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">La pizza enfant</h2>
                        </div></a>
                </div>
            </div>
        </div>

        <h2 class="section__title menu_pizza">Nos pizzas</h2>

        <div class="discover__container container swiper-container">
            <div class="swiper-wrapper">
                <div class="discover__card swiper-slide">
                    <a href="produit/chevre.php">
                        <img src="assets/img/discover1.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">La chèvre</h2>
                        </div>
                    </a>
                </div>

                <div class="discover__card swiper-slide">
                    <a href="produit/quatre.php">
                        <img src="assets/img/discover2.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">La 4 fromages</h2>
                        </div></a>
                </div>

                <div class="discover__card swiper-slide">
                    <a href="produit/mozza.php">
                        <img src="assets/img/discover3.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">La Mozza</h2>
                        </div></a>
                </div>

                <div class="discover__card swiper-slide">
                    <a href="produit/pepperoni.php">
                        <img src="assets/img/discover4.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">La pepperoni </h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <h2 class="section__title menu_boisson">Nos boissons</h2>

        <div class="discover__container container swiper-container">
            <div class="swiper-wrapper">
                <div class="discover__card swiper-slide">
                    <a href="produit/schweppes.php">
                        <img src="assets/img/drink1.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">Schweppes</h2>
                        </div>
                    </a>
                </div>

                <div class="discover__card swiper-slide">
                    <a href="produit/carlsberg.php">
                        <img src="assets/img/drink2.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">Carlsberg</h2>
                        </div>
                    </a>
                </div>

                <div class="discover__card swiper-slide">
                    <a href="produit/coca.php">
                        <img src="assets/img/drink3.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">Coca Cola</h2>
                        </div>
                    </a>
                </div>

                <div class="discover__card swiper-slide">
                    <a href="produit/vin.php">
                        <img src="assets/img/drink4.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">Vin </h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <h2 class="section__title menu_dessert">Nos desserts</h2>

        <div class="discover__container container swiper-container">
            <div class="swiper-wrapper">
                <div class="discover__card swiper-slide">
                    <a href="produit/tiramisu.php">
                        <img src="assets/img/sweet1.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">Tiramisu</h2>
                        </div>
                    </a>
                </div>

                <div class="discover__card swiper-slide">
                    <a href="produit/cookie.php">
                        <img src="assets/img/sweet2.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">Cookie</h2>
                        </div>
                    </a>
                </div>

                <div class="discover__card swiper-slide">
                    <a href="produit/glace.php">
                        <img src="assets/img/sweet3.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">Glace</h2>
                        </div>
                    </a>
                </div>

                <div class="discover__card swiper-slide">
                    <a href="produit/muffins.php">
                        <img src="assets/img/sweet4.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">Muffins</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <h2 class="section__title menu_dessert">Récapitulatif</h2>
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