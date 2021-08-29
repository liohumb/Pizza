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

    <section class="order section">
        <div class="container grid">
            <div class="order__container container grid">

                <div class="order__info">
                    <h1 class="order__info-title">Au boulot !</h1>
                </div>

                <div class="order__data">
                    <h3 class="order__data-title">statut : admin</h3>
                    <h3 class="order__data-title">Nombre de commande : ##</h3>
                    <h3 class="order__data-title">Nombre de message (non-lu) : ##</h3>
                </div>
            </div>
            <div class="order__button">
                <a href="admin.php" class="order__button-option button">Retour Acceuil</a>
            </div>
        </div>
    </section>
    <section>
        <div class="container grid" id="suggestions">
            <h2 class="order__title section__title">Les commandes en préparations / livraisons</h2>

            <div class="order__table-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                    <tr>
                        <th>Numéro de commande</th>
                        <th>Nom du client</th>
                        <th>Details</th>
                        <th>Prix total</th>
                        <th>Statut</th>
                        <th>Changer statut</th>
                    </tr>
                    </thead>
                </table>
            </div>
            <div class="order__table-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                    <tr>
                        <td>123456-250821</td>
                        <td>John Doe</td>
                        <td>- La Mozza (x2) <br>- Carlsberg (x1) <br>- Coca-Cola (x 1)</td>
                        <td>27.00</td>
                        <td>en livraison</td>
                        <td class="order__table-icon">
                            <i class="uil uil-clock"></i> <i class="uil uil-pizza-slice"></i> <i class="uil uil-truck"></i>
                            <br> <i class="uil uil-check"></i> <i class="uil uil-multiply"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>789012-250821</td>
                        <td>Bill Gates</td>
                        <td>- La pepperoni (x1) <br>- Vin (rosé) (x1)</td>
                        <td>19.00</td>
                        <td>en préparation</td>
                        <td class="order__table-icon">
                            <i class="uil uil-clock"></i> <i class="uil uil-pizza-slice"></i> <i class="uil uil-truck"></i>
                            <br> <i class="uil uil-check"></i> <i class="uil uil-multiply"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>345678-250821</td>
                        <td>Steve Jobs</td>
                        <td>- La pizza enfant (x1) <br>-La 4 formages (x1) <br>-La poulette (x1) <br>- Tiramisu (x1)
                            <br>- Glace (vanille-choco) (x1) <br>- Coca-Cola (x1) <br>- Carlsberg (x1) <br>- Vin (rosé) (x1)</td>
                        <td>19.00</td>
                        <td>en attente</td>
                        <td class="order__table-icon">
                            <i class="uil uil-clock"></i> <i class="uil uil-pizza-slice"></i> <i class="uil uil-truck"></i>
                            <br> <i class="uil uil-check"></i> <i class="uil uil-multiply"></i>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="container grid" id="suggestions">
            <h2 class="order__title section__title">Les commandes terminées</h2>

            <div class="order__table-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                    <tr>
                        <th>Numéro de commande</th>
                        <th>Nom du client</th>
                        <th>Details</th>
                        <th>Prix total</th>
                        <th>Statut</th>
                        <th>Changer statut</th>
                    </tr>
                    </thead>
                </table>
            </div>
            <div class="order__table-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                    <tr>
                        <td>123456-240821</td>
                        <td>John Doe</td>
                        <td>- La Mozza (x2) <br>- Carlsberg (x1) <br>- Coca-Cola (x 1)</td>
                        <td>27.00</td>
                        <td>livré</td>
                        <td class="order__table-icon">
                            <i class="uil uil-clock"></i> <i class="uil uil-pizza-slice"></i> <i class="uil uil-truck"></i>
                            <br> <i class="uil uil-check"></i> <i class="uil uil-multiply"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>789012-240821</td>
                        <td>Bill Gates</td>
                        <td>- La pepperoni (x1) <br>- Vin (rosé) (x1)</td>
                        <td>19.00</td>
                        <td>annulé</td>
                        <td class="order__table-icon">
                            <i class="uil uil-clock"></i> <i class="uil uil-pizza-slice"></i> <i class="uil uil-truck"></i>
                            <br> <i class="uil uil-check"></i> <i class="uil uil-multiply"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>345678-240821</td>
                        <td>Steve Jobs</td>
                        <td>- La pizza enfant (x1) <br>-La 4 formages (x1) <br>-La poulette (x1) <br>- Tiramisu (x1)
                            <br>- Glace (vanille-choco) (x1) <br>- Coca-Cola (x1) <br>- Carlsberg (x1) <br>- Vin (rosé) (x1)</td>
                        <td>19.00</td>
                        <td>livré</td>
                        <td class="order__table-icon">
                            <i class="uil uil-clock"></i> <i class="uil uil-pizza-slice"></i> <i class="uil uil-truck"></i>
                            <br> <i class="uil uil-check"></i> <i class="uil uil-multiply"></i>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

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