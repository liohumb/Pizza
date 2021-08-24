<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/inscription.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
    <!--
        <div class="connexion">
            <a href="inscription.php" class="btn-conn">Inscription</a>
            |
            <a href="connexion.php" class="btn-conn">Connexion</a>
        </div>
        -->

    <div class="connexion-bis">
        <a href="mon-compte.php" class="btn-conn">Mon compte</a>
        |
        <a href="" class="btn-conn">Déconnexion</a>
    </div>

</header>
<section class="contact section">
    <div id="container">
        <h1>Sécurité avant tout !</h1>
        <form action="#" method="post" id="contact_form">
            <div class="mdp">
                <label for="name"></label>
                <input type="text" placeholder="Votre ancien mot de passe" name="telephone" id="telephone_input" required>
            </div>
            <div class="mdp">
                <label for="name"></label>
                <input type="text" placeholder="Votre nouveau mot de passe" name="telephone" id="telephone_input" required>
            </div>
            <div class="mdp">
                <label for="name"></label>
                <input type="text" placeholder="Confirmez votre nouveau mot de passe" name="telephone" id="telephone_input" required>
            </div>
            <div class="submit">
                <input type="submit" value="Modifier mon mot de passe" id="form_button" />
                <a href="mon-compte.php" class="button">Retour à mon compte</a>
            </div>
        </form>
    </div>
</section>

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