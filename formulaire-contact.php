<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/contact.css">
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
                    <a href="menu.php" class="nav__link">Le menu</a>
                </li>
                <li class="nav__item">
                    <a href="contact.php" class="nav__link">Nous contacter</a>
                </li>
                <li class="nav__item">
                    <a href="inscription.php" class="btn-conn">Inscription</a>
                    |
                    <a href="connexion.php" class="btn-conn">Connexion</a>
                    <!--
                    <a href="mon-compte.php" class="btn-conn">Mon compte</a>
                    |
                    <a href="index.php" class="btn-conn">Déconnexion</a>
                    -->
                </li>
            </ul>

            <i class="uil uil-times nav__close" id="nav-close"></i>
        </div>


        <a href="panier.php" class="nav__link nav__cart"><i class="uil uil-pizza-slice cart_logo"></i></a>

        <div class="nav__toggle" id="nav-toggle">
            <i class="uil uil-bars"></i>
        </div>
    </nav>
</header>

<section class="about section" id="about">
    <h1>Bien le bonjour <?php echo $_POST['nom']?> !</h1>
    <div class="about__container container grid">
        <div class="about__data">
            <h2 class="section__title">Nous avons bien reçu <br>votre message ! </h2>
            <p class="about__description">Nous vous répondrons dans les plus bref délais à l'adresse : <?php echo $_POST['email'] ?> .
                <br>En attendant pourquoi pas commander une bonne pizza ?
                <br><br>À bientôt <?php echo $_POST['nom']?> !
            </p>
        </div>

        <div class="about__img">
            <div class="about__img-overlay">
                <img src="assets/img/about1.jpg" alt="" class="about__img-one">
            </div>

            <div class="about__img-overlay">
                <img src="assets/img/about2.jpg" alt="" class="about__img-two">
            </div>
        </div>
    </div>

    <div class="btn-choix">
        <a href="menu.php" class="button" >Découvrir le menu</a>
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
</body>
</html>