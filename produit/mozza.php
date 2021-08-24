<?php
    include('../ajout-panier.php');
 require_once("../dbcontroller.php");
 $db_handle= new DBcontroller();
?>

<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/produit.css">
    <title>Pizza</title>
</head>
<body>
<header class="header nav_menu-page" id="header">
    <nav class="nav container">
        <a href="#" class="nav__logo">LORENZZO'S PIZZA</a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="../index.html" class="nav__link">Acceuil</a>
                </li>
                <li class="nav__item">
                    <a href="../index.html#about" class="nav__link">À propos</a>
                </li>
                <li class="nav__item">
                    <a href="../menu.html" class="nav__link">Le Menu</a>
                </li>
                <li class="nav__item">
                    <a href="../contact.html" class="nav__link">Contact</a>
                </li>
            </ul>

            <i class="uil uil-times nav__close" id="nav-close"></i>
        </div>

        <a href="../testPanier.php" class="nav__link nav__cart"><i class="uil uil-pizza-slice cart_logo"></i></a>


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
        <div class="about__container container grid">

            <div class="about__img">
                <div class="about__img-overlay">
                    <img src="../assets/img/discover3.jpg" alt="" class="about__img-two">
                </div>
            </div>
            <form method="post" action="mozza.php">
            <div class="contact__data">
                <h1 class="product-name">La Pizza Mozza</h1>
                <h2 class="product-price">12€50</h2>
                <h3 class="product-slogan">Description résumée de la pizza sélectionné</h3>
                <ul class="preferences">
                    <li>
                        <span class="list-name">Taille (en cm) :</span>
                        <select class="taille">
                            <option>24</option>
                            <option>36</option>
                            <option>42</option>
                        </select>
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
            <a href="../menu.html" class="button btn-ret-aj">Retour au menu</a>
         
             <input type="hidden" name="id" value ="6">
            <input type ="submit" name="ajoute" class="button btn-ret-aj" value="Ajouter au panier"></input>
        </form>
        </div>
    </section>
    <section class="discover section" id="discover">
        <h2 class="section__title">Vous n'avez pas soif ?</h2>

        <div class="discover__container container swiper-container">
            <div class="swiper-wrapper">
                <div class="discover__card swiper-slide">
                    <a href="../produit/schweppes.html">
                        <img src="../assets/img/drink1.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">Schweppes</h2>
                        </div>
                    </a>
                </div>

                <div class="discover__card swiper-slide">
                    <a href="../produit/carlsberg.html">
                        <img src="../assets/img/drink2.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">Carlsberg</h2>
                        </div>
                    </a>
                </div>

                <div class="discover__card swiper-slide">
                    <a href="../produit/coca.html">
                        <img src="../assets/img/drink3.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">Coca Cola</h2>
                        </div>
                    </a>
                </div>

                <div class="discover__card swiper-slide">
                    <a href="../produit/vin.html">
                        <img src="../assets/img/drink4.jpg" alt="" class="discover__img">
                        <div class="discover__data">
                            <h2 class="discover__title">Vin </h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
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
<script src="../assets/js/scrollreveal.min.js"></script>
<script src="../assets/js/swiper-bundle.min.js"></script>
<script src="../assets/js/main.js"></script>
</body>
</html>