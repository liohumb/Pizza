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
<header class="header nav_menu-page" id="header">
    <nav class="nav container">
        <a href="#" class="nav__logo">LORENZZO'S PIZZA</a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="index.php" class="nav__link">Acceuil</a>
                </li>
                <li class="nav__item">
                    <a href="index.php#about" class="nav__link">À propos</a>
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
        <div class="connexion-bis">
            <a href="" class="btn-conn">Mon compte</a>
            |
            <a href="" class="btn-conn">Déconnexion</a>
        </div>
</header>

<main class="home" id="home">
    <section class="about section">
        <div class="about__container container grid">

            <div class="about__img">
                <h1 class="product-name">John Doe</h1>
            </div>

            <div class="contact__data">
                <h3 class="product-slogan">06 06 06 06 06</h3>
                <h3 class="product-slogan">21 rue de Marseille <br> 75001 PARIS</h3>
                <h3 class="product-slogan">john@doe.fr</h3>
            </div>
        </div>
        <div class="btn-choix">
            <a href="index.php" class="button btn-ret-aj">Retour à l'acceuil</a>
            <a href="modifier-mon-compte.php" class="button btn-ret-aj">Modifier informations</a>
            <a href="modifier-mdp.php" class="button btn-ret-aj">Modifier mot de passe</a>
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