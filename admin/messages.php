<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Pizza</title>
</head>
<body>
<header class="header nav__menu-page" id="header">
    <nav class="nav container">
        <a href="../index.php" class="nav__logo">LORENZZO'S PIZZA</a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li>
                    <a href="commandes.php" class="nav__link">Commandes</a>
                </li>
                <li>
                    <a href="modifier-produit.php" class="nav__link">Produits</a>
                </li>
                <li>
                    <a href="messages.php" class="nav__link">Messages</a>
                </li>
                <li>
                    <a href="clients.php" class="nav__link">Utilisateurs</a>
                </li>
                <li>
                    <a href="modifier-informations.php" class="btn-conn"><i class="uil uil-user-circle"></i></a>
                    |
                    <a href="../index.php" class="btn-conn"><i class="uil uil-times"></i></a>
                </li>
            </ul>

            <i class="uil uil-times nav__close" id="nav-close"></i>
        </div>

        <div class="nav__toggle" id="nav-toggle">
            <i class="uil uil-bars"></i>
        </div>
    </nav>
</header>

    <section class="message section">
        <div class="container grid">
            <div class="message__container container grid">

                <div class="message__info">
                    <h1 class="message__info-title">Vous avez un mess@ge !</h1>
                </div>

                <div class="message__data">
                    <h3 class="message__data-title">statut : admin</h3>
                    <h3 class="message__data-title">Nombre de commande : ##</h3>
                    <h3 class="message__data-title">Nombre de message (non-lu) : ##</h3>
                </div>
            </div>
            <div class="message__button">
                <a href="admin.php" class="message__button-option button">Retour Acceuil</a>
            </div>
        </div>
    </section>
    <section>
        <div class="container grid">
            <div class="message__table-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Email</th>
                        <th>Message</th>
                    </tr>
                    </thead>
                </table>
            </div>
            <div class="message__table-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                    <tr>
                        <td>Doe</td>
                        <td>John</td>
                        <td>john@doe.fr</td>
                        <td>
                            Bonjour, je voulais vous dire bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla.
                        </td>
                    </tr>
                    <tr>
                        <td>Stark</td>
                        <td>Tony</td>
                        <td>tony@ironman.com</td>
                        <td>
                            Bonjour, je voulais vous dire bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla.
                        </td>
                    </tr>
                    <tr>
                        <td>Gates</td>
                        <td>Bill</td>
                        <td>bill@microsoft.com</td>
                        <td>
                            Bonjour, je voulais vous dire bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla.
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
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
                        <a href="../index.php" class="footer__link">À propos de nous</a>
                    </li>
                    <li class="footer__item">
                        <a href="../menu.php" class="footer__link">Nos pizza</a>
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