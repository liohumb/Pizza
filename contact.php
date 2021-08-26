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
<section class="form__contact section">
    <div class="container">
        <h1 class="form__contact-title">Dites nous tout !</h1>
        <form action="formulaire-contact.php" method="post" id="contact_form">
            <div class="form__contact-name">
                <label for="name">
                    <input type="text" placeholder="Votre premon" name="nom" id="name_input" required>
                </label>
            </div>
            <div class="form__contact-email">
                <label for="mail">
                    <input type="email" placeholder="Votre email" name="email" id="email_input" required>
                </label>
            </div>
            <div class="form__contact-phone">
                <label for="phone">
                    <input type="text" placeholder="Votre numéro de téléphone" name="telephone" id="telephone_input" required>
                </label>
            </div>
            <div class="form__contact-subject">
                <label for="subject">
                    <select placeholder="Subject line" name="subject" id="subject_input">
                        <option disabled hidden selected>Selectionnez l'objet de votre message</option>
                        <option>Je souhaite avoir des informtions sur les pizzas</option>
                        <option>J'ai un soucis avec ma commande</option>
                        <option>Je n'arrive pas à passer commande</option>
                        <option>Je veux juste faire blabla :)</option>
                    </select>
                </label>
            </div>
            <div class="form__contact-message">
                <label for="message">
                    <textarea name="message" placeholder="Je suis toute ouïe" id="message_input" cols="30" rows="5" required></textarea>
                </label>
            </div>
            <div>
                <input type="submit" value="Envoyer" class="button" />
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
<script src="assets/js/main.js"></script>
</body>
</html>