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
<section class="subscribe section">
    <div class="subscribe__container container grid">
        <h1 class="subscribe__title">Ravi de vous rencontrer !</h1>
        <form action="formulaire-inscription.php" method="post" id="contact_form">
            <div class="subscribe__form-firstName">
                <label for="first_name">
                    <input type="text" placeholder="Votre prénom" name="prenom" required>
                </label>
            </div>
            <div class="subscribe__form-lastName">
                <label for="last_name">
                <input type="text" placeholder="Votre nom" name="nom" required>
                </label>
            </div>
            <div class="subscribe__form-address">
                <label for="address">
                <input type="text" placeholder="Votre adresse de livraison" name="adresse" required>
                </label>
            </div>
            <div class="subscribe__form-cptAddress">
                <label for="cpt_address">
                <input type="text" placeholder="Complément adresse" name="cpt-adresse">
                </label>
            </div>
            <div class="subscribe__form-postCode">
                <label for="post_code">
                <input type="text" id="post_code" placeholder="Votre code postal" name="cp" required>
                </label>
            </div>
            <div class="subscribe__form-city">
                <label for="city">
                <input type="text" id="city" placeholder="Votre ville" name="ville" required>
                </label>
            </div>
            <ul>
                <li data-vicopo="#city, #post_code" data-vicopo-click='{"#post_code": "code", "#city": "ville"}'>
                    <strong data-vicopo-code-postal></strong>
                    <span data-vicopo-ville></span>
                </li>
            </ul>
            <div class="subscribe__form-phone">
                <label for="phone">
                <input type="tel" placeholder="Votre numéro de téléphone" name="telephone" required>
                </label>
            </div>
            <div class="subscribe__form-email">
                <label for="email">
                <input name="email" type="text" id="email" placeholder="Votre email" required>
                </label>
            </div>
            <div class="subscribe__form-confEmail">
                <label for="conf-email">
                <input name="emailConfirm" type="text" id="confemail" onblur="confirmEmail()" placeholder="Confirmez votre email" required>
                </label>
            </div>
            <div class="subscribe__form-password">
                <label for="password">
                <input type="password" id="password" placeholder="Votre mot de passe" name="mdp" required>
                </label>
            </div>
            <div class="subscribe__form-confPassword">
                <label for="conf_password">
                <input type="password" id="confirm_password" placeholder="Confirmez votre mot de passe" name="conf-mdp" required>
                </label>
            </div>
            <div>
                <input type="submit" class="button" value="S'inscrire"/>
            </div>
        </form>
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="assets/js/vicopo.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>