<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/produit.css">
    <link rel="stylesheet" href="../assets/css/table.css">
    <title>Pizza</title>
</head>
<body>
<header class="header nav_menu-page" id="header">
    <nav class="nav container">
        <a href="../index.php" class="nav__logo">LORENZZO'S PIZZA</a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="commandes.php" class="nav__link">Commandes</a>
                </li>
                <li class="nav__item">
                    <a href="modifier-produit.php" class="nav__link">Produits</a>
                </li>
                <li class="nav__item">
                    <a href="messages.php" class="nav__link">Messages</a>
                </li>
                <li class="nav__item">
                    <a href="clients.php" class="nav__link">Utilisateurs</a>
                </li>
                <li class="nav__item">
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

<main class="home" id="home">
    <section class="about section">
        <div class="about__container container grid">

            <div class="about__img">
                <h1 class="product-name">Vos clients qui vous adore !</h1>
            </div>

            <div class="contact__data">
                <h3 class="product-slogan">statut : admin</h3>
                <h3 class="product-slogan">Nombre de commande : ##</h3>
                <h3 class="product-slogan">Nombre de message (non-lu) : ##</h3>
            </div>
        </div>
        <div class="btn-choix">
            <a href="admin.php" class="button btn-ret-aj">Retour Acceuil</a>
        </div>
    </section>
    <section>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Adresse</th>
                </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Doe</td>
                    <td>John</td>
                    <td>john@doe.fr</td>
                    <td>06 06 06 06 06</td>
                    <td>
                        21 rue de la pizza <br>75001, PARIS
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Gates</td>
                    <td>Bill</td>
                    <td>bill@microsoft.com</td>
                    <td>06 06 06 06 06</td>
                    <td>
                        21 rue du pc <br>13003, MARSEILLE
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Jobs</td>
                    <td>Steve</td>
                    <td>steve@apple.com</td>
                    <td>06 06 06 06 06</td>
                    <td>
                        21 rue de la pomme <br>69002, LYON
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Stark</td>
                    <td>Tony</td>
                    <td>tony@ironman.com</td>
                    <td>06 06 06 06 06</td>
                    <td>
                        21 rue des Avengers <br>59001, LILLE
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Doe</td>
                    <td>John</td>
                    <td>john@doe.fr</td>
                    <td>06 06 06 06 06</td>
                    <td>
                        21 rue de la pizza <br>75001, PARIS
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Gates</td>
                    <td>Bill</td>
                    <td>bill@microsoft.com</td>
                    <td>06 06 06 06 06</td>
                    <td>
                        21 rue du pc <br>13003, MARSEILLE
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Jobs</td>
                    <td>Steve</td>
                    <td>steve@apple.com</td>
                    <td>06 06 06 06 06</td>
                    <td>
                        21 rue de la pomme <br>69002, LYON
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Stark</td>
                    <td>Tony</td>
                    <td>tony@ironman.com</td>
                    <td>06 06 06 06 06</td>
                    <td>
                        21 rue des Avengers <br>59001, LILLE
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
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